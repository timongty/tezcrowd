**<h1>TezCrowd</h1>**

A decentralised crowdfunding platform for the community powered by the Tezos blockchain.

TezCrowd DAO is a MVP prototype of a crowdfunding smart contract comprising both the Flexible (Keep-It-All) crowdfunding model and the Fixed (All-Or-Nothing) crowdfunding model.

The largest benefits of a decentralised crowdfunding platform would be greater transparency and efficiency of fees. With no intermediaries involved, it becomes easier to ensure that the funds raised are spent appropriately and to track them if necessary. 

The use of smart contracts also eliminates most of the fees involved in conventional crowdfunding platforms, such as the fundraiser fee (approx 5 to 8%) and the payment processor fee (approx 2.9%).

In the Tezos ecosystem, a decentralised crowdfunding platform will also serve to foster a shared community spirit together in support of new and exciting projects, NFT and otherwise.

Through crowdfunding, project creators and developers (e.g. for a large-scale NFT avatar project) can lower their risk and gauge the market or community's response to their project based on tezos raised.

In contrast, the conventional approach entails investing too much time or effort into a high-risk venture only to find lacklustre demand.

Over time and with more members, the DAO will allow insights into what is truly valued by the community and shape the direction of new initiatives and ventures.

With the implementation of TezCrowd DAO, I hope that this would lead to a higher number of successful projects started on the Tezos blockchain driven by an ever-growing supportive community.


---

**<h3>Goals</h3>**    

For this MVP, my focus is to first establish a proof-of-concept for decentralised crowdfunding on the Tezos blockchain and establish an outline of the TezCrowd DAO white paper. 

This will help solidify the foundations of the project and serve to attract members to be part of the DAO.

Thereafter, the focus will shift to onboard potential crowdfunding projects in the Tezos ecosystem and further develop the platform to phase 2 and beyond.

---

**<h3>Governance Mechanism</h3>**    

The TezCrowd DAO will allow members to decide the focus and direction of the decentralised crowdfunding platform.

This is done through the following ways:

- Voting and approving new projects
- Approving and banning of members
- Voting for platform fees and respective distribution
- Voting to initiate new internally-funded projects
- Voting to support projects in funding and marketing

TezCrowd will eventually be primarily community-led to collectively decide on new crowdfunding projects, manage members, and distribute any internal funds raised. 

Progressive steps to decentralisation are required to balance the development and management needs of the platform especially in the early stages. 


---

**<h3>Crowdfunding Models on the Smart Contract</h3>**

For both crowdfunding models (Keep-It-All and All-Or-Nothing), overfunding beyond the target amount is allowed, and the project end date must be set within a limit of 3 to 45 days.

In the Flexible (KIA) model, the project owner can claim funds at any time, and there are no refunds for supporters. 

In the Fixed (AON) model, the project owner can only claim funds raised at the end of the project if the target goal has been reached. However, supporters can claim a refund if the project has failed to achieve its target goal by the end date.

Small and scalable projects are more likely to be funded through the KIA model, while large and non-scalable projects are more likely to be funded through the AON model. 

Similar to Indiegogo, TezCrowd project owners have the flexibility to decide whether their crowdfunding project will be based on either the Flexible (KIA) model or the Fixed (AON) model.

Reference: Schwienbacher, A. (2000). Crowdfunding Models: Keep-it-All vs. All-or-Nothing. SSRN Electronic Journal.

---

**<h3>Demo MVP</h3>**

The demo site can be viewed at https://tezcrowd.com. 

There is one sample crowdfunding project with the Flexible (Keep-it-all) Model on the homepage created through the smart contract for this demo. 
 
Users can connect their wallets and support the sample project by pledging Tezos - for development purposes, a testnet wallet is used behind the scenes to send any tez (no matter which wallet has been connected). 

Supporters of the project are also shown with their corresponding total amount pledged (by reading the smart contract's storage map [funders]).

Once an amount has been successfully pledged with the transaction recorded on the blockchain, the crowdfunding project will be automatically updated with the new progress. 

**<h4>User Experience</h4>**

This demo primarily focuses on the user experience in funding and supporting a project.

To place more emphasis on the project details, the layout is kept simple and minimalistic with a main featured image (on the left) and a container showing the project data read from the smart contract storage (on the right). 

The pledge amount input has been validated on the client-side using regex to ensure only valid and positive integers or decimals are submitted. Examples of invalid amounts that will be rejected: 

    abcdefgh
    1.23abcd
    abc1.23
    1.10.23
    23.
    .
    0
    0.00
    
Flash messages will appear depending on whether a wallet is connected, and the input pledge amount:
    
1. Scenario: User is not connected and inputs invalid pledge amount
    - Flash message requesting a valid amount. Pledge button will be disabled until user connects wallet.  
2. Scenario: User is not connected and inputs valid pledge amount.
    - Flash message requesting user to connect his wallet first
3. Scenario: User is connected and inputs invalid pledge amount
    - Flash message requesting a valid amount.
4. Scenario: User is connected and inputs valid pledge amount
    - Flash message showing transaction is being processed by the blockchain. This could take up to 20 seconds. Upon confirmation of a successful transaction, the "in-process" flash message will be replaced with a "successful" flash message. 


**<h4>Future Considerations</h4>**

Features planned for Phase 2:

    Creation of a project standard similar to the FA2 contract standard
    Multiple projects creation and ledger system for record keeping
    Additional fields such as tags and categories
    User profiles showing past projects supported
    DAO interface for user voting 

As most crowdfunding projects require a substantial amount of text and multimedia (images and videos) to draw support for their cause, there must also be some consideration as to whether this content should be stored on the blockchain with ipfs or stored off-chain.

It is also likely that this project content is subject to frequent changes and updates along the course of the crowdfunding duration.

Furthermore, there is probably a need for additional features such as comments and favouriting to promote engagement with the project unless third-party apps such as Discourse are used.

However, the use of 3rd-party apps has the downside of making it inconvenient for users and decreasing their engagement with the platform.

My preliminary approach is to adopt a hybrid decentralised model where only essential core unchangeable elements are stored on-chain. In contrast, non-essential and frequently changed elements, such as the afore-mentioned comments and long-form project content, will be stored off-chain (e.g. in a mysql database).

A hybrid model will help address the main issues mentioned above without compromising the main benefits of a decentralised crowdfunding platform which lie in the high transparency (of key information) and efficiency of fees.      

More advanced features such as a milestone tracker managed by the DAO or supporters of the project can also be explored and discussed together with the community in future.

---

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

---

**<h3>Who Made This</h3>**

TezCrowd is designed and built by @timongty (https://twitter.com/timongty), an indie maker with other projects such as Galleseum, a blockchain-agnostic NFT gallery platform.

Frameworks and tools used:

    Laravel and Tailwind CSS
    Taquito, Beacon Wallet and Smartpy
    Webpack, npm

Contract Address deployed on Florence Testnet:


    v3: KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8

Old versions of contract addresses (for reference):

    v1: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE
    v2: KT1BKTEdxbJVQt7ZSPGg7wWYvVmotugsEUhm

---

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
    
Main files for reference:

    /resources/assets/js/tezos.js           - all tezos/taquito code will be here
    /resources/views/home.blade.php         - homepage
    /resources/views/pages/about.blade.php  - about page
    /resources/views/partials               - partial files (flash messages, footer, nav etc)
    /routes/web.php                         - route file
    
Reference sites:

    OpenTezos                     - https://opentezos.com/
    SmartPy Docs and References   - https://smartpy.io/reference.html
    Tezos Developer Portal        - https://tezos.b9lab.com/
    Wiki Tezos Agora Portal       - https://wiki.tezosagora.org
    Coinmonks: Claude Barde       - https://medium.com/coinmonks/build-a-tezos-dapp-using-taquito-and-the-beacon-sdk-692d7dc822aa
    
--- 

**<h3>License</h3>**

This project is authored by @timongty and is free to be used as outlined in the MIT License.