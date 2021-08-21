import { TezosToolkit } from '@taquito/taquito';
import { BeaconWallet } from '@taquito/beacon-wallet';
// import { b58cencode, prefix, Prefix } from '@taquito/utils';

var inProcessMessage = `
    <div class="general_notification rounded-md bg-yellow-50 p-4 mt-2 mb-1 border border-yellow-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="general_message text-sm text-yellow-700">Transaction in progress. Please wait for a moment.</p>
            </div>
        </div>
    </div>`;

var loginMessage = `
    <div class="general_notification rounded-md bg-yellow-50 p-4 mt-2 mb-1 border border-yellow-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="general_message text-sm text-yellow-700">Please connect your wallet first before pledging!</p>
            </div>
        </div>
    </div>`;

var validAmountMessage = `
    <div class="general_notification rounded-md bg-yellow-50 p-4 mt-2 mb-1 border border-yellow-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="general_message text-sm text-yellow-700">Please input a valid amount!</p>
            </div>
        </div>
    </div>`;

var successMessage = `
    <div class="success_notification rounded-md bg-green-50 p-4 mt-2 mb-1 border border-green-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="sucess_message text-sm font-medium text-green-800">Transaction completed. Your pledge is successful.</p>
            </div>
        </div>
    </div>`;

// For development use only
import { InMemorySigner } from '@taquito/signer';

const contract_address = 'KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8';
const options = {
    name: 'TezCrowd',
    preferredNetwork: "florencenet",
};
const wallet = new BeaconWallet(options);
const tezos  = new TezosToolkit("https://florencenet.api.tez.ie");


// connect wallet button
var connect_wallet_button = document.getElementsByClassName("connect_wallet")[0];
connect_wallet_button.addEventListener('click', () => {
    connectWallet();
});

// pledge to project button
var pledge_button = document.getElementsByClassName("pledge")[0];
pledge_button.addEventListener('click', () => {

    var pledge_amount = $('.add_funds').val();

    // regex expression to check that pledge amount is an int or float
    var float = new RegExp('^[0-9]+(?:\\.[0-9]+)?$');

    // validation: pledge amount must be a valid int/float and must be greater than 0
    if(float.test(pledge_amount) == true && parseFloat(pledge_amount) > 0){
        $(inProcessMessage).appendTo('.notification_container').fadeIn(2000);
        $('.pledge').attr('disabled', true).addClass('cursor-not-allowed');
        supportProject();
    } else{
        $('.notification_container').find('.general_notification').remove();
        $(validAmountMessage).appendTo('.notification_container').fadeIn(2000);
        setTimeout(() => {
            $('.notification_container .general_notification').fadeOut(1000);
        }, 5000);
    }

});

// check if user has connected wallet
async function checkState(){
    const active_account = await wallet.client.getActiveAccount();
    if (active_account) {
        // User already has account connected, everything is ready
        console.log("Connected:", active_account.address);
        const truncated_wallet_address = active_account.address.slice(0, 5) + '...' + active_account.address.slice(active_account.address.length - 5);
        $('.connect_wallet').text(truncated_wallet_address).removeClass('connect_wallet cursor-pointer');
        return active_account;
    } else {
        console.log("Not connected");
    }
}
checkState();

async function homeProject(){

    const crowdfunding = await tezos.wallet.at(contract_address);
    const storage = await crowdfunding.storage();

    for(let entry of storage.funders.valueMap.entries()){
        let formatted_address = entry[0].slice(1,6) + '...' + entry[0].slice(entry[0].length - 6, entry[0].length - 1);
        let formatted_amount  = (entry[1].c[0] / 1000000).toFixed(2);

        var supporter_html = `
            <div class="flex flex-row text-sm justify-between">
                <span>` + formatted_address + `</span>
                <span>` + formatted_amount + ` tez</span>
            </div>`;
        $(supporter_html).appendTo('.supporters').fadeIn(2000);
    }

    var target_amount = storage.target_amount.c[0];
    $('.target_amount').text(target_amount / 1000000);

    var contributed_amount = storage.contributed_amount.c[0];
    $('.amount_raised').text((contributed_amount / 1000000).toFixed(2));

    var percentage_progress = (contributed_amount / target_amount) * 100;
    $('.amount_raised_percentage').text(percentage_progress.toFixed(2) + '%');

    $('.progress_bar').css('width', percentage_progress.toFixed(2) + '%')

    $('.title').text(storage.title);
    $('.about').text(storage.about);
    $('.featured_image').attr('src', storage.image);

    var cf_type = storage.cf_type;
    if(cf_type == 'KIA'){
        $('.cf_type').text('Flexible');
    } else{
        $('.cf_type').text('Fixed');
    }

}
homeProject();

async function connectWallet(){

    try{

        await wallet.requestPermissions({
            network: {
                type: 'florencenet'
            },
        });

        tezos.setWalletProvider(wallet);
        const wallet_address = await wallet.getPKH();
        const truncated_wallet_address = wallet_address.slice(0, 5) + '...' + wallet_address.slice(wallet_address.length - 5);
        $('.connect_wallet').text(truncated_wallet_address).removeClass('connect_wallet cursor-pointer');

    } catch (error){
        console.log(error);
    }
}

// const disconnect = () => {
//     wallet.client.destroy();
//     wallet = 'undefined';
//     wallet_address = '';
// }


async function supportProject(){
    try{
        const active_account = await wallet.client.getActiveAccount();
        if (active_account) {

            const wallet_address = active_account.address;
            const crowdfunding = await tezos.wallet.at(contract_address);
            const storage = await crowdfunding.storage();

            var pledge_amount = $('.add_funds').val();

            // For development use only - set signer
            InMemorySigner.fromSecretKey('edskS9gHLsuM5mPbH1rSFakf8jQnHtEc5NtoRh9NwoFTsZW2JyM8amQxJeZRqAza5RqQwrwxHxTkohNXALBtxQb7xRoEXx1Aak')
                .then((theSigner) => {
                    tezos.setProvider({ signer: theSigner });
                    return tezos.signer.publicKeyHash();
                })
                .then((publicKeyHash) => {
                    console.log(`The public key hash associated is: ${publicKeyHash}.`);
                })
                .catch((error) => console.log(error));

            tezos.contract.at(contract_address).then((contract) => {

                // for inspecting contract method before running
                // let inspect = contract.methods.add_funds(pledge_amount).toTransferParams();
                // console.log(JSON.stringify(inspect, null, 2));

                return contract.methods.add_funds("unit").send({ amount: pledge_amount});

            }).then(op => {

                console.log(`Waiting for ${op.hash} to be confirmed...`);
                return op.confirmation().then(() => op.hash);

            }).then(() => {

                // update ui with new pledged amount
                console.log('Transaction completed successfully.');

                var contributed_amount = storage.contributed_amount.c[0];
                var new_contributed_amount = parseFloat((contributed_amount / 1000000)) + parseFloat(pledge_amount);
                $('.amount_raised').text(new_contributed_amount.toFixed(2)); // in tez

                var target_amount = storage.target_amount.c[0] / 1000000;
                var percentage_progress = (new_contributed_amount / target_amount) * 100;
                $('.amount_raised_percentage').text(percentage_progress.toFixed(2) + '%');

                $('.add_funds').val('');
                $('.progress_bar').css('width', percentage_progress.toFixed(2) + '%');

                $('.notification_container').find('.general_notification').remove();
                $(successMessage).appendTo('.notification_container').fadeIn(2000);
                $('.pledge').removeAttr('disabled').removeClass('cursor-not-allowed');
                setTimeout(() => {
                    $('.notification_container .success_notification').fadeOut(1000);
                }, 5000);

            }).catch((error) => console.log(error));

        } else{
            $('.notification_container').find('.general_notification').remove();
            $(loginMessage).appendTo('.notification_container').fadeIn(2000);
            setTimeout(() => {
                $('.notification_container .general_notification').fadeOut(1000);
            }, 5000);
        }
    } catch(error){
        console.log(error);
    }
}


// unused signerFactory - for multiple users
// const signerFactory = async (pk) => {
//     const b58encodedSecret = b58cencode(
//         pk,
//         prefix[Prefix.P2SK]
//     );
//     console.log(b58encodedSecret);
//     await tezos.setProvider({ signer: await InMemorySigner.fromSecretKey(b58encodedSecret) });
//     return tezos;
// };

// currently unused: create new project functions
// var create_project_button = document.getElementsByClassName("create_project")[0];
// create_project_button.addEventListener('click', () => {
//     createProject();
// });
// async function createProject(){
//     try{
//
//         const active_account = await wallet.client.getActiveAccount();
//         if (active_account) {
//
//             const wallet_address = active_account.address;
//             const crowdfunding = await tezos.wallet.at(contract_address);
//             const storage = await crowdfunding.storage();
//
//             var create_project_form = $('.create_project_form');
//             let title = create_project_form.find('.title').val();
//             let about = create_project_form.find('.about').val();
//             let target_amount = create_project_form.find('.target').val() * 1000000;
//             let type = create_project_form.find('.type').val();
//
//             // setContract(crowdfunding);
//
//             console.log('test variable');
//             console.log(crowdfunding);
//             console.log(crowdfunding.methods);
//             console.log(storage);
//
//             console.log('wallet address: '+ wallet_address);
//             console.log('title: '+ title);
//             console.log('target amount: '+ target_amount);
//             console.log('type: '+ type);
//
//             // For development use only
//             InMemorySigner.fromSecretKey('edskRg3pqa4VP9xiVzpFjLhmuGUvPUvnpf6wnziatpAyUuVdL8nJEBcLvEvnQ3U188RpVg9a1wT7uMqzbFKi3SBkowSxFpJJHA')
//                 .then((theSigner) => {
//                     tezos.setProvider({ signer: theSigner });
//                     //We can access the public key hash
//                     return tezos.signer.publicKeyHash();
//                 })
//                 .then((publicKeyHash) => {
//                     console.log(`The public key hash associated is: ${publicKeyHash}.`);
//                 })
//                 .catch((error) => console.log(error));
//
//
//             tezos.contract.at(contract_address).then((contract) => {
//                 // let inspect = contract.methods.create_project(title, '1629920480', type, wallet_address, target_amount).toTransferParams();
//                 // console.log(JSON.stringify(inspect, null, 2));
//                 return contract.methods.create_project(type, '1629920480', title, wallet_address, target_amount).send();
//             }).then(op => {
//                 console.log(`Waiting for ${op.hash} to be confirmed...`);
//                 return op.confirmation(3).then(() => op.hash);
//             }).catch((error) => console.log(error));
//
//             // .then((op) => {
//             //         console.log(`Estimating the smart contract call : `);
//             //         return tezos.estimate.transfer(op);
//             //     })
//             //         .then((est) => {
//             //             console.log(`burnFeeMutez : ${est.burnFeeMutez},
//             //             gasLimit : ${est.gasLimit},
//             //             minimalFeeMutez : ${est.minimalFeeMutez},
//             //             storageLimit : ${est.storageLimit},
//             //             suggestedFeeMutez : ${est.suggestedFeeMutez},
//             //             totalCost : ${est.totalCost},
//             //             usingBaseFeeMutez : ${est.usingBaseFeeMutez}`);
//             //         })
//             //         .then(op => {
//             //             console.log(`Waiting for ${op.hash} to be confirmed...`);
//             //             return op.confirmation(3).then(() => op.hash);
//             //         })
//
//         }
//
//     } catch(error){
//         console.log(error);
//     }
// }
