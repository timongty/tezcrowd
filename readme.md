**<h1>About TezCrowd</h1>**

A decentralised crowdfunding platform for the community powered by the Tezos blockchain.

TezCrowd is a MVP prototype of a crowdfunding smart contract comprising both the Flexible (Keep-It-All) crowdfunding model and the Fixed (All-Or-Nothing) crowdfunding model.

For both crowdfunding models, overfunding beyond the target amount is allowed, and the project end date must be set within a limit of 3 to 45 days.

In the Flexible (KIA) model, the project owner can claim funds at any time and there are no refunds for supporters.

In the Fixed (AON) model, the project owner can only claim funds raised at the end of the project if the target goal has been reached. Supporters can claim a refund if the project has failed to achieve its target goal by the end date.

Similar to Indiegogo, project owners can choose to either create a project based on the Flexible (KIA) model or the Fixed (AON) model.

For this MVP, users are able to connect their wallets and support a project by pledging Tezos (using a testnet wallet for development purposes). The crowdfunding project will be updated with the new pledged total once the transaction is successful.

The homepage is a demo of a sample Flexible (KIA) project created using the crowdfunding smart contract.

Future features for Phase 2 if people are keen about TezCrowd:

    Creation of a project standard similar to the FA2 contract standard
    Multiple projects creation and ledger system
    Additional fields such as tags and categories
    Show project supporters and amount pledged

More advanced features such as a milestone tracker managed by a DAO or supporters of the project can be explored in future.

<h2>Who Made This</h2>

TezCrowd is designed and built by @timongty, an indie maker with other projects such as Galleseum, a blockchain-agnostic NFT gallery platform.

Frameworks and tools used:

    Laravel and Tailwind CSS
    Taquito, Beacon Wallet and Smartpy

Contract Address deployed on Florence Testnet:
KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8

To view the crowdfunding smart contract for this project on Smartpy, click here.

Old versions of contract addresses:

    v1: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE
    v2: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE

<h2>Initialising this project</h2>

To initialise this project, please make sure to install all dependencies first.
 
    npm install
    composer install
    
A basic .env file has been included for easy start-up as well.

If there are any issues, please try the following to clear caches:
 
    php artisan optimize:clear
    composer dump-autoload

Versions used:

    php v7.4.19
    node v12.18.3
    npm v6.14.6