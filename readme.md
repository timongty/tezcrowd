**<h1>TezCrowd</h1>**

A decentralised crowdfunding platform for the community powered by the Tezos blockchain.

TezCrowd is a MVP prototype of a crowdfunding smart contract comprising both the Flexible (Keep-It-All) crowdfunding model and the Fixed (All-Or-Nothing) crowdfunding model.

**<h3>Crowdfunding Models</h3>**

For both crowdfunding models, overfunding beyond the target amount is allowed, and the project end date must be set within a limit of 3 to 45 days.

In the Flexible (KIA) model, the project owner can claim funds at any time, and there are no refunds for supporters.

In the Fixed (AON) model, the project owner can only claim funds raised at the end of the project if the target goal has been reached. However, supporters can claim a refund if the project has failed to achieve its target goal by the end date.

Like Indiegogo, project owners can either create a project based on the Flexible (KIA) model or the Fixed (AON) model.

**<h3>Demo</h3>**

The demo site can be viewed at https://tezcrowd.com. 

There is one sample crowdfunding project with the Flexible (Keep-it-all) Model on the homepage created through the smart contract for this demo. 
 
Users can connect their wallets and support the sample project by pledging Tezos - a testnet wallet is used behind the scenes for development purposes (no matter which wallet has been connected). 

Once the amount has been successfully pledged, the crowdfunding project will be automatically updated with the new progress. 

Future features for Phase 2 if people are keen about TezCrowd:

    Creation of a project standard similar to the FA2 contract standard
    Multiple projects creation and ledger system
    Additional fields such as tags and categories
    Show project supporters and amount pledged

More advanced features such as a milestone tracker managed by a DAO or supporters of the project can be explored in future.

**<h3>Smart Contract Entrypoints</h3>**

The crowdfunding smart contract has 4 entrypoints.

1. Create Project - Initialise a new crowdfunding project
    
    Input: Takes in the project owner's wallet address, crowdfunding model type (string: KIA or AON), end date of the project (epoch format), title (string), about (string), image (string: url to the image source), and target amount of the project (tez).
    
    Output: Blockchain state updated to reflect the project.
    
2. Add Funds - For supporters to pledge tezos to the project (a supporter is allowed to pledge multiple times to the same project)

    Input: Supporter's pledged amount in tez. This method will verify that the project is still ongoing and has not ended; it will also add the supporter and pledged amount to a map of funders for record (if the supporter already exists in the map of funders, his total contributed amount will increase with the new pledge amount).
    
    Output: Project state (contributed_amount, leftover_amount) updated to reflected new pledged amount. 

3. Claim Funds - For the project owner to claim funds 

    Input: Checks the project crowdfunding type and verify if the source is the project owner.
    
    Output: If the project is a Flexible (KIA) model, project owner is able to claim the funds to his wallet. Leftover amount will be reset to 0. If the project is a Fixed (AON) model, project owner is only able to claim the funds after the project has ended and target goal has been reached. 

4. Refund - For supporters to get a refund of their pledged tezos should the AON project fails

    Input: Verify that the source (supporter) is a funder of the project, and that the project is of AON type and has ended.
    
    Output: Send the amount contributed by the supporter back to his wallet.

**<h3>Who Made This</h3>**

TezCrowd is designed and built by @timongty (https://twitter.com/timongty), an indie maker with other projects such as Galleseum, a blockchain-agnostic NFT gallery platform.

Frameworks and tools used:

    Laravel and Tailwind CSS
    Taquito, Beacon Wallet and Smartpy
    Webpack, npm

Contract Address deployed on Florence Testnet:
KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8

Old versions of contract addresses:

    v1: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE
    v2: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE

**<h3>Initialising this project</h3>**

To initialise this project, please make sure to install all dependencies after cloning the project.
 
    npm install
    composer install
    
A basic .env file has been included for easy start-up as well.

If necessary, Laravel development environments can be configured using Laradock (https://laradock.io) or Valet (https://laravel.com/docs/8.x/valet). More options are available at https://bestlaravel.com/t/development-setup.

If there are any issues, please try the following to clear caches:
 
    php artisan optimize:clear
    composer dump-autoload

Versions used for reference:

    php v7.4.19
    node v12.18.3
    npm v6.14.6