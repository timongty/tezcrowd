@extends('default')

@section('content')

    <div class="bg-white overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-16 px-4 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">A hackathon project</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">About TezCrowd</h3>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://source.unsplash.com/6FqkGMOLskY?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="The space was so cozy, I've never seen so many great designers in a single place." width="1184" height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Paul Hanaoka</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="hidden sm:flex mt-48 relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://source.unsplash.com/MChSQHxGZrQ?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="Some of the Unsplash team working together." width="1184" height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Annie Spratt</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="hidden sm:flex mt-48 relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://source.unsplash.com/fIq0tET6llw?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="The focus" width="1184" height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Diego PH</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="hidden sm:flex mt-48 relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://source.unsplash.com/z7oytXGI6VI?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="I feel like making dreams come true" width="1184" height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Peter Fogden</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="hidden sm:flex mt-48 relative text-base mx-auto max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://source.unsplash.com/SHY-CKpYjrE?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="NYC is not a city, it's a world!" width="1184" height="1376">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Photograph by Saketh Garuda</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <p class="text-lg text-gray-500">A decentralised crowdfunding platform for the community powered by the Tezos blockchain.</p>
                    </div>
                    <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1 text-justify pr-5">
                        <p>TezCrowd DAO is a MVP prototype of a crowdfunding smart contract comprising both the Flexible (Keep-It-All) crowdfunding model and the Fixed (All-Or-Nothing) crowdfunding model.</p>
                        <p>The largest benefits of a decentralised crowdfunding platform would be greater transparency and efficiency of fees. With no intermediaries involved, it becomes easier to ensure that the funds raised are spent appropriately and to track them if necessary.</p>
                        <p>The use of smart contracts also eliminates most of the fees involved in conventional crowdfunding platforms, such as the fundraiser fee (approx 5 to 8%) and the payment processor fee (approx 2.9%).</p>
                        <p>In the Tezos ecosystem, a decentralised crowdfunding platform will also serve to foster a shared community spirit together in support of new and exciting projects, NFT and otherwise.</p>
                        <p>Through crowdfunding, project creators and developers (e.g. for a large-scale NFT avatar project) can lower their risk and gauge the market or community's response to their project based on tezos raised.</p>
                        <p>In contrast, the conventional approach entails investing too much time or effort into a high-risk venture only to find lacklustre demand.</p>
                        <p>Over time and with more members, the DAO will allow insights into what is truly valued by the community and shape the direction of new initiatives and ventures.</p>
                        <p>With the implementation of TezCrowd DAO, I hope that this would lead to a higher number of successful projects started on the Tezos blockchain driven by an ever-growing supportive community.</p>

                        <h3>Goals</h3>
                        <p>For this MVP, my focus is to first establish a proof-of-concept for decentralised crowdfunding on the Tezos blockchain and establish an outline of the TezCrowd DAO white paper.</p>
                        <p>This will help solidify the foundations of the project and serve to attract members to be part of the DAO.</p>
                        <p>Thereafter, the focus will shift to onboard potential crowdfunding projects in the Tezos ecosystem and further develop the platform to phase 2 and beyond.</p>

                        <h3>Governance Mechanism</h3>
                        <p>The TezCrowd DAO will allow members to decide the focus and direction of the decentralised crowdfunding platform.</p>
                        <p>This is done through the following ways:</p>
                        <ul>
                            <li>Voting and approving new projects</li>
                            <li>Approving and banning of members</li>
                            <li>Voting for platform fees and respective distribution</li>
                            <li>Voting to initiate new internally-funded projects</li>
                            <li>Voting to support projects in funding and marketing</li>
                        </ul>
                        <p>TezCrowd DAO will progressively move from a one-man-operation to become primarily community-led to collectively decide on new crowdfunding projects, manage members, and distribute any internal funds raised.</p>
                        <p>I believe progressive steps to decentralisation are required to balance the development and management needs of the platform, especially in the early stages.</p>

                        <h3>Crowdfunding Models on the Smart Contract</h3>
                        <p>For both crowdfunding models (Keep-It-All and All-Or-Nothing), overfunding beyond the target amount is allowed, and the project end date must be set within a limit of 3 to 45 days.</p>
                        <p>In the Flexible (KIA) model, the project owner can claim funds at any time, and there are no refunds for supporters.</p>
                        <p>In the Fixed (AON) model, the project owner can only claim funds at the end of the project if the target has been reached. However, supporters can claim a refund if the project has failed to achieve its target by the end date.</p>
                        <p>Small and scalable projects are more likely to be funded through the KIA model, while large and non-scalable projects are more likely to be funded through the AON model.</p>
                        <p>Similar to Indiegogo, TezCrowd project owners have the flexibility to decide whether their crowdfunding project will be based on either the Flexible (KIA) model or the Fixed (AON) model.</p>
                        <p>Reference: <a href="https://d1wqtxts1xzle7.cloudfront.net/64058657/6b70daa57c49c0cae93594a0892f8f4632e2-with-cover-page-v2.pdf?Expires=1629575774&Signature=g6tEbKrllidoSLb6E1bbhYZW1JSZj1I~9ABpJdr6iCEtE9eyc2vGgm3cz1xK42EhqrF1q5eIf2BghMQFgPYbiLSxm1pc1CJlnIOFBbbr9WHK7fYv6MzXDxLgXK~6ZkDYc0OPoX8Vbebe8n1lFFz3FQZF87wzbXOjfu2jjmOtpTEwNS-qyQt0T2U8WXdX8iw07xmLjCJjTcEI6qPkgb6XGh2E9Bx4o5wES5aU~B5-Qi8jTaiQlz2MlWnSGvBS9i1xqjaRwS74GIqjD0W-LKenGJmA2o3dEyXMlLptvX5nHx67kMDnVbt248rStZQKKNUpBw~YIAMlDFEeMRgsP-Ix-w__&Key-Pair-Id=APKAJLOHF5GGSLRBV4ZA" target="_blank">Schwienbacher, A. (2000). Crowdfunding Models: Keep-it-All vs. All-or-Nothing. SSRN Electronic Journal.</a></p>


                        <h3>Demo MVP</h3>
                        <p>There is one sample crowdfunding project with the Flexible (Keep-it-all) Model on the homepage created through the smart contract for this demo.</p>
                        <p>Users can connect their wallets and support the sample project by pledging Tezos - for development purposes, a testnet wallet is used behind the scenes to send any tez (no matter which wallet has been connected).</p>
                        <p>Supporters of the project are also shown with their corresponding total amount pledged (by reading the smart contract's storage map [funders]).</p>
                        <p>Once an amount has been successfully pledged with the transaction recorded on the blockchain, the crowdfunding project will be automatically updated with the new progress.</p>

                        <h4>User Experience</h4>
                        <p>This demo primarily focuses on the user experience in funding and supporting a project.</p>
                        <p>To place more emphasis on the project details, the layout is kept simple and minimalistic with a main featured image (on the left) and a container showing the project data read from the smart contract storage (on the right).</p>
                        <p>The pledge amount input has been validated on the client-side using regex to ensure only valid and positive integers or decimals are submitted. Examples of invalid amounts that will be rejected:</p>
                        <ul>
                            <li>abcdefgh</li>
                            <li>1.23abcd</li>
                            <li>abc1.23</li>
                            <li>1.10.23</li>
                            <li>23.</li>
                            <li>.</li>
                            <li>0</li>
                            <li>0.00</li>
                        </ul>

                        <p>Flash messages will also appear depending on whether a wallet is connected, and the input pledge amount:</p>
                        <ol>
                            <li>Scenario: User is not connected and inputs invalid pledge amount</li>
                            <p class="pl-7">Flash message requesting a valid amount. Pledge button will be disabled until user connects wallet.</p>
                            <li>Scenario: User is not connected and inputs valid pledge amount.</li>
                            <p class="pl-7">Flash message requesting user to connect his wallet first</p>
                            <li>Scenario: User is connected and inputs invalid pledge amount</li>
                            <p class="pl-7">Flash message requesting a valid amount.</p>
                            <li>Scenario: User is connected and inputs valid pledge amount</li>
                            <p class="pl-7">Flash message showing transaction is being processed by the blockchain. This could take up to 20 seconds. Upon confirmation of a successful transaction, the "in-process" flash message will be replaced with a "successful" flash message.</p>
                        </ol>

                        <h4>Future Considerations</h4>
                        <p>Features planned for Phase 2:</p>
                        <ul role="list">
                            <li>Creation of a project standard similar to the FA2 contract standard</li>
                            <li>Multiple projects creation and ledger system</li>
                            <li>Additional fields such as tags and categories</li>
                            <li>User profiles showing past projects supported</li>
                            <li>DAO interface for user voting</li>
                            <li>Pre-crowdfunding section to get community feedback before project starts</li>
                            <li>Post-crowdfunding section to regularly build cohesiveness</li>
                        </ul>
                        <p>As most crowdfunding projects require a substantial amount of text and multimedia (images and videos) to draw support for their cause, there must also be some consideration as to whether this content should be stored on the blockchain with ipfs or stored off-chain.</p>
                        <p>It is also likely that this project content is subject to frequent changes and updates along the course of the crowdfunding duration.</p>
                        <p>Furthermore, there is probably a need for additional features such as comments and favouriting to promote engagement with the project unless third-party apps such as Discourse are used.</p>
                        <p>However, the use of 3rd-party apps has the downside of making it inconvenient for users and decreasing their engagement with the platform.</p>
                        <p>My preliminary approach is to adopt a hybrid decentralised model where only essential core unchangeable elements are stored on-chain. In contrast, non-essential and frequently changed elements, such as the afore-mentioned comments and long-form project content, will be stored off-chain (e.g. in a mysql database).</p>
                        <p>A hybrid model will help address the main issues mentioned above without compromising the main benefits of a decentralised crowdfunding platform which lie in the high transparency (of key information) and efficiency of fees.</p>
                        <p>We can also consider more advanced features such as a project milestone tracker to release funds managed by the DAO (or supporters of the individual project) as well as the integration of NFTs priced at fixed amounts into a crowdfunding project as a means to reward early supporters.</p>
                        <p>These ideas and features can be explored and discussed with the community in future.</p>

                        <h3>Who Made This</h3>
                        <p>TezCrowd is designed and built by <a href="https://twitter.com/timongty" target="_blank">@timongty</a>, an indie maker with other projects such as <a href="https://galleseum.com" target="_blank">Galleseum</a>, a blockchain-agnostic NFT gallery platform.</p>
                        <p>Frameworks and tools used:</p>
                        <ul role="list">
                            <li>Laravel and Tailwind CSS</li>
                            <li>Taquito, Beacon Wallet and Smartpy</li>
                        </ul>
                        <p>Contract Address deployed on Florence Testnet: </br> <a href="https://better-call.dev/florencenet/KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8/operations" target="_blank">KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8</a></p>
                        <p>To view the crowdfunding smart contract for this project on Smartpy, click <a href="https://smartpy.io/ide?code=eJzVWFtv2zYUfvevINwHS4jt@BK3QTcHc4MVK4olwxDsZRgEWqJirZIokFQC79fvUKQulGjZ6tqHGXmIyMNz43e@c6QoySgTSEQJGUXqf55gJrIjwhzxbDR6gz4TkqFIIBzHyPn8aeeihAYkRjgN0A7WKEMPVByi9Bn9KjdGfow5R_eMvgZhngYOz@b3NBUM@8J9P0LwC0iIPC9KI@F5DidxOEX0NSVMb8ufXJ1LCadaKn@FqLm0VYvTjqwfeuKYEVN2MukKkjTwAiyIIQiey9RwgZPMWbjdUyISMTGX7OrxnubiEsEowc8XafRlSqN9Lkjg4YTmqdAOk3@srsKtQCiVbB3gCfmYhIK@ENY40CsvMHsmoqm@X15CgzBuBgryCc4c8YUcy@enXRAwwvkUiRcc5wRWH2hKXEOhOyoefwJ5Amk5ehmNUlFhzWcErtbLGP2b@KKJuGmJkGmFgKm61am6s6m6kakZXxOo2RyyFIVHx8zAXRX9EsJHgCIOerbj35QTWh9Kci7QnkBNMYLEAadouUBwaj52zVoA1_DcNLE1narkBQ3wUWUvpa_VcpR6a4jwyGVmC5k5DoJixVm7TbGbjZLriN1sXEvgVe3c1TYaET8dCNKpr8KlGUlRCNSBBSANw@IayWNG2F0DPza8O2HBx2lKTRt1bm82XStVcisr2woLFinFPppwLPsl42xLZNmusaCNrQKaZV@xxVYh0LKvSGKroDkYJr2lIq9aliYvqsSKc0vG7kqwuciWki5VXRUHWritT7TJxy6ezaOwcUgzSmEORymXjYcTudYIw7Sjj_xZSf4ly6Zv@8ruCIk5GWak0tLPXJK1T16IEX4FPOgX0KYnpjuqj88@iZns2VVzll27aOem7_Vdlz5Lta0icE_E2@o0214ktO1Ka7XV6WlMnLLehk6jCf3Qf2Nv5Dgze2Szcpz5HlmyVJGlPO62p6r5vLqaLKui_P9dVG9RMKLmyvME1ayJ3ePDxNZcLiKQ_oON_tTOeG@musxQH5Qjdp_kaCTTI@lawIDqpDiRHWHcxCx0OZmuYl8nCgdJlMp_dLY54Mr3Zf6d8U7u6c6I48gnp@Tknpbb071y1yL3ge61lH_ALI6IVepe7WlJ7pMUs4g2JMslR0kYYvPD0jFCNliueB0pXViCyvqdpIhPZk@Oli3T0Gz8pWVp3hojy0nA0FXPka33By9kNPFy4XuAD8etZ6pbtxpC5QUCdY_1CCon_zBiMBxpkxM9lMoNoCiO4C85orZMOR5MDkJk_P31Nac5AxfzlGfwbnYAgCfXuw9__Lz0j0_vDl8mrem2LsXbhevOWZ46SkM3WIilP84y@_N6sNAaNWFKCEFYLcMwM58_WfjSPbvauG4LJWtn_ATuIT9P8hiL6IXAIAnXmQC9IBoWLyNczj4kGH@lx6uFzervBVWhGZIzKbxB01cSFDMpXLNqKbU9TWs2Y_DmEwXw8BFD17KYeWhoF1RNDSqoWn1zlPgaG48F3IeqLu7oosptNV@jeFdG8YK7PaW7siydKt2GpuGF@9YsXOgvzcLlBNpIcKZyO0LfrnQ3m3bpGsFeWrirgWWwXlxwclDhViXULB9Itv4MtSehfL3zm1AiDXSuzqKzBX1bbhwYPxz5VCxBcq5Wi0sC1Y2vG@o7a6i_YCAmQKp_kHWsPhCok1MEs5gZ5AHzglWkrTbD2DmgNxVdDrgAJM0PCAPjkZ8PO_GUsfzXOAY4fuvqj0fDmAmcLDqKQmfp2drgKX37PVy1tiyd4qqWtuF8tenlK4iNnaOrtsz3ZKtOuJcy1no4Yw0t@S7IZfF9E6AzE099Q8EAkL8Fx_8FKZJ43w--" target="_blank">here</a>.</p>
                        <p>Old versions of contract addresses:</p>
                        <ul role="list">
                            <li>v1: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE</li>
                            <li>v2: KT19wKxN27RvAjf4aWGCCpPDg5mBVxiJWKRE</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
