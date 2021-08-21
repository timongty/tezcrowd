@extends('default')

@section('content')

    <div class="bg-white overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
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
                </div>
                <div class="mt-8 lg:mt-0">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <p class="text-lg text-gray-500">A decentralised crowdfunding platform for the community powered by the Tezos blockchain.</p>
                    </div>
                    <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1 text-justify pr-5">
                        <p>TezCrowd is a MVP prototype of a crowdfunding smart contract comprising both the Flexible (Keep-It-All) crowdfunding model and the Fixed (All-Or-Nothing) crowdfunding model.</p>
                        <p>For both crowdfunding models, overfunding beyond the target amount is allowed, and the project end date must be set within a limit of 3 to 45 days.</p>
                        <p>In the Flexible (KIA) model, the project owner can claim funds at any time and there are no refunds for supporters.</p>
                        <p>In the Fixed (AON) model, the project owner can only claim funds at the end of the project if the target has been reached. Supporters can claim a refund if the project has failed to achieve its target by the end date.</p>
                        <p>Similar to Indiegogo, project owners can choose to either create a project based on the Flexible (KIA) model or the Fixed (AON) model.</p>
                        <p>For this MVP, users are able to connect their wallets and support a project by pledging Tezos (using a testnet wallet for development purposes). The crowdfunding project will be updated with the new pledged total once the transaction is successful.</p>
                        <p>The homepage is a demo of a sample Flexible (KIA) project created using the crowdfunding smart contract.</p>
                        <p>Future features for Phase 2 if people are keen about TezCrowd:</p>
                        <ul role="list">
                            <li>Creation of a project standard similar to the FA2 contract standard</li>
                            <li>Multiple projects creation and ledger system</li>
                            <li>Additional fields such as tags and categories</li>
                            <li>Show project supporters and amount pledged</li>
                        </ul>
                        <p>More advanced features such as a milestone tracker managed by a DAO or supporters of the project can be explored in future.</p>
                        <h3>Who Made This</h3>
                        <p>TezCrowd is designed and built by <a href="https://twitter.com/timongty" target="_blank">@timongty</a>, an indie maker with other projects such as <a href="https://galleseum.com" target="_blank">Galleseum</a>, a blockchain-agnostic NFT gallery platform.</p>
                        <p>Frameworks and tools used:</p>
                        <ul role="list">
                            <li>Laravel and Tailwind CSS</li>
                            <li>Taquito, Beacon Wallet and Smartpy</li>
                        </ul>
                        <p>Contract Address deployed on Florence Testnet: </br> KT1RjMpTDuSmoUj2gn2gaRpxqZPLkxk1VCu8</p>
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