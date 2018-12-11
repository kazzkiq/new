<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Peercoin</title>
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon48.png" sizes="48x48" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon64.png" sizes="64x64" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon128.png" sizes="128x128" />
    <link rel="icon" type="image/png" href="img/logos/favicons/Leaf/favicon256.png" sizes="256x256" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
<!-- Above this is fine -->

<!-- Language selection should go here -->
    <section id="language">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1>Choose your language</h1>
                </div>
                <div class="col-4">
                    <button>Cancel</button>
                </div>
            </div>
            <div class="row">
            <div class="col-md-3 col-12 lang">
                <img src="img/icons/flags/united-kingdom.png" alt="">
                <p>English (UK)</p>
            </div>
            <div class="col-md-3 col-12 lang">
                <img src="img/icons/flags/france.png" alt="">
                <p>French</p>
            </div>
            <div class="col-md-3 col-12 lang">
                <img src="img/icons/flags/india.png" alt="">
                <p>English (IN)</p>
            </div>
            <div class="col-md-3 col-12 lang">
                <img src="img/icons/flags/united-states.png" alt="">
                <p>English (USA)</p>
            </div>
        </div>
        </div>
    </section>

<section id="first">

        <?php include('menu.php');
        ?>
        <?php echo "Hello World";
        ?>
        <?php echo date('l, F jS, Y');
        ?>


    <div id="header-content" class="center-content">
        <img class="main_logo" src="img/logo_main.png" alt="">
        <h1 class="title">The Pioneer of Proof of Stake</h1><br>
        <p class="desc">The world's first efficient and sustainable public blockchain, serving as a secure base layer for the future blockchain connected world.</p>
        <div class="buttonWrap">
            <a href="#" style="padding-top: 100px"><span><button class="reverse">What is Peercoin?</button></span></a>
            <a href="#getstarted"><button>Get Started</button></a>
        </div>
    </div>
</section>
<!--
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Digital Wallet</h1>
                    <br/>
                    <img class="laptop-mobile" src="img/laptopM.png" alt="">
                    <p class="desc">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    <br><br> This is Photoshop's version  of Lorem Ipsum.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                    <button class="green">Download Wallet</button>
                </div>
            </div>
        </div>
    </section>
-->

<!-- Efficient and Sustainable Security -->
    <section id="three">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-wrapper">
                    <h1 class="title">Efficient & Sustainable Security</h1>

                    <p class="desc">Peercoin first came online in 2012, making it one of the earliest pioneering
                                    blockchains. The key innovation of Peercoin is its invention of proof-of-stake,
                                    an alternative consenus protocol to Bitcoin’s proof-of-work. <br/><br/>

                                    Proof-of-work blockchains are secured by proving the consumption of a
                                    costly limited resource: energy. Proof-of-stake replaces this security
                                    protocol by utilizing an alternative scarce resource: time.<br/><br/>

                                    Due to the cost efficient nature of proof-of-stake’s time based consensus
                                    rules, Peercoin is capable of allowing any network connected computer to
                                    participate in the blockchain’s security and block production process.<br>
                                    Not only does this efficiency strengthen Peercoin by growing the number of
                                    security providers, it ensures that security can be sustained in the long-term.
                        <br>
                    <!--<button class="shadow">Learn More</button>-->
                </div>
                <div class="col-md-6 image-wrapper">
                    <img src="img/dummy.png" alt="">
                </div>
            </div>
            <!-- Direct User Governance -->
            <div class="row">
                <div class="col-md-6 content-wrapper">
                    <h1 class="title">Direct User Governance</h1>

                    <p class="desc">In Peercoin, coin owners are the ones who wield influence over the network,
                                    produce new blocks, and secure the chain. Stakeholders of Peercoin co-own
                                    the blockchain and collectively decide its future through protocol voting.<br/><br/>

                                    Voting is carried out by stakeholders simply by installing the version of
                                    Peercoin they support, loading their wallet with coins, and letting them sit
                                    while they are occasionally selected by the protocol to mint the next block.
                                    Every minted block rewards stakeholders with new peercoins and a vote.<br/><br/>

                                    This makes Peercoin the first blockchain capable of allowing its protocol
                                    rules to be governed directly by its users; making for a network that is more
                                    decentralized, democratic, and easily secured by people around the world.
                        <br>
                    <!--<button class="shadow">Learn More</button>-->
                </div>
                <div class="col-md-6 image-wrapper">
                    <img src="img/dummy.png">
                </div>
            </div>
            <!-- Trustless Base Layer -->
            <div class="row">
                <div class="col-md-6 content-wrapper">
                    <h1 class="title">Trustless Base Layer</h1>

                    <p class="desc">Given that the blockchain is immutable by its nature and all recorded data is
                                    stored forever, chain bloat becomes an escalating problem at higher usage
                                    levels which harms both security and the ability of the network to scale. <br/><br/>

                                    To preserve the trustless security of the blockchain and ensure its ability to
                                    scale to global usage levels, Peercoin’s inventor tailored the blockchain and
                                    its economics to fulfill the specific role of base layer settlement network.<br/><br/>

                                    This role focuses development on modularity, keeping the protocol simple
                                    and secure with as few features as possible, while maintaining Peercoin as a
                                    stable base upon which any number of additional layers can be built on top.<br/><br/>

                                    Rather than being coded directly into the blockchain protocol, features like
                                    tokens and smart contracts are developed as independent secondary layer
                                    protocols on top of Peercoin. Building separate layers helps protect the base
                                    layer blockchain from new exploits, chain bloat, and allows proper scalability.
                        <br>
                    <!--<button class="shadow">Learn More</button>-->
                </div>
                <div class="col-md-6 image-wrapper">
                    <img src="img/dummy.png" alt="">
                </div>
            </div>
            <!-- PoS Security and PoW Distribution -->
            <div class="row">
                <div class="col-md-6 content-wrapper">
                    <h1 class="title">PoS Security & PoW Distribution</h1>

                    <p class="desc">Peercoin is the first hybrid blockchain: utilizing proof-of-stake to provide
                                    security for the network and proof-of-work for distribution of new coins.<br/><br/>

                                    A flower blooming in the wild occasionally produces seeds, which spread
                                    around over time and grow into new flowers. The hybrid design of Peercoin
                                    imitates this by spreading proof-of-work rewards to miners who then sell the
                                    newly minted coins on exchanges for profit. These peercoin are purchased by
                                    new stakeholders around the world who use them for proof-of-stake minting.<br/><br/>

                                    So while proof-of-stake in Peercoin provides security directly, proof-of-work
                                    is designed to do so indirectly by strengthening the decentralization of the
                                    network through a wider distribution of peercoin to new potential minters.<br/><br/>

                                    Additionally, proof-of-work mining also generates entropy, which provides a
                                    source of randomness that helps limit gaming of the system and protects
                                    against certain attacks that are inherent to pure proof-of-stake networks.
                        <br>
                    <!--<button class="shadow">Learn More</button>-->
                </div>
                <div class="col-md-6 image-wrapper">
                    <img src="img/dummy.png" alt="">
                </div>
            </div>
            <!-- Reliable Store of Value -->
            <div class="row">
                <div class="col-md-6 content-wrapper">
                    <h1 class="title">Reliable Store of Value</h1>

                    <p class="desc">Efficiency, sustainability, user governance, scalability via modularity, and
                                    continual distribution. These qualities combine to form a long-term minded
                                    blockchain network that is primarily focused on maximizing decentralization.<br/><br/>

                                    This primary focus works to preserve the trustless, immutable and censorship
                                    resistant nature of Peercoin so that it can always be relied upon to fulfill its
                                    core role as a distributed mechanism for securely storing all types of value.<br/><br/>

                                    This value can be anything from a fiat currency conversion to peercoin, to
                                    data being stored on the chain in the form of tokens, records, or contracts.
                                    Regardless of the type of value that is being stored, Peercoin was built with
                                    the fundamentals in mind to always ensure that your data is safe and secure.
                        <br>
                    <!--<button class="shadow">Learn More</button>-->
                </div>
                <div class="col-md-6 image-wrapper">
                    <img src="img/dummy.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="four">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title"><a name="getstarted" style="padding-top: 100px">Get Started</a></h1><br><br>
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header" id="wallets_dropdown">
                                <h5 data-toggle="collapse" data-target="#collapsezero" aria-expanded="true" aria-controls="collapsezero">
                                    <a id="wallet_dropdown"><span><img src="img/icons/whitefavicon32.png" alt=""></span>Learn</a>
                                </h5>
                            </div>

                            <div id="collapsezero" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. <br> <br> Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="img/icons/sidecard-learn.png" alt="" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="purchasing_dropdown">
                                <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <span><img src="img/icons/wallet_white.png" alt=""></span>Wallets
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                The <a href="wallet.html" class="intext">Peercoin wallet</a> is available on Windows, Mac OSX, and Linux platforms.<br> <br>

                                                Command-line experiences are also available.<br><br>

                                                To get started, check out the Wallet download page and the Installation guide's.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="img/icons/sidecard-wallet.png" alt="" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="minting_dropdwon">
                                <h5 data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                  <span><img src="img/icons/purchasing_white.png" alt=""></span>Purchase
                                </h5>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                Peercoin is available through a variety of exchanges and services.  You can find a <a href="resources.html#exchanges" class="intext">list of exchanges and services</a> here.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="img/icons/sidecard-purchasing.png" alt="" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="mining_dropdown">
                                <h5 data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                  <span><img src="img/icons/anvil.png" alt=""></span>Mint
                                </h5>
                            </div>

                            <div id="collapsethree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                The use of Proof-of-stake mining in Peercoin is efficient because network security is not dependent on the use of massive amounts of electrical energy (proof-of-energy-burn). Instead minters invest their coins and time to emulate the PoW process. This is done by simply opening up their wallet app, sending coins to their address and letting them sit there while they are occasionally selected by the protocol to mint the next block. This process is both energy and cost efficient.<br><br>

                                                You can find more information on minting in the <a href="https://docs.peercoin.net/#/peercoin-minting-behaviour" class="intext">Peercoin documentation</a>.
                                            </p>
                                        </div>
                                        <div class="col-md-4 justify-content-center">
                                            <img src="img/icons/sidecard-anvil.png" alt="" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                  <span><img src="img/icons/pickaxe.png" alt=""></span>Mine
                                </h5>
                            </div>

                            <div id="collapsefour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                Peercoin uses SHA-256 encryption and protocol for mining.<br><br>

                                                To mine Peercoin, you need a mining software.<br><br>

                                                To get started, check out our <a href="https://docs.peercoin.net/#/mining" class="intext">Mining documentation</a>.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="img/icons/sidecard-mining.png" alt="" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                  <span><img src="img/icons/community_white.png" alt=""></span>Community
                                </h5>
                            </div>

                            <div id="collapsefive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>
                                                Join our <a href="https://talk.peercoin.net/" class="intext">Forum,</a> <a href="https://discord.gg/XPxfwtG" class="intext">Discord,</a> or <a href="https://t.me/peercoin" class="intext">Telegram</a> to chat with other Peercoin community members and developers. Subscribe to our <a href="https://twitter.com/PeercoinPPC" class="intext">Twitter,</a> <a href="https://www.reddit.com/r/peercoin" class="intext">Reddit,</a> or <a href="https://medium.com/peercoin" class="intext">Medium,</a> to stay up-to-date with all the latest Peercoin news.
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="img/icons/sidecard-community.png" alt="" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section id="five">
    <div class="row">
        <div class="col-12 justify-content-center">
                    <h1 class="title">Latest Blog</h1>
                </div>
        <div class="col-md-12">
            <div id="fm-medium-embed"></div>

            <script src="https://data.feedmirror.com/embed.js?friday"></script>
            <script>
              var fmSettings = {
                feedURL: 'https://data.feedmirror.com/-LT9rBn07nhypf5995uC.json',
                integration: 'medium-embed',
                linkOutText: 'Read more',
                openNewTab: true,
                linkToMediumProfileText: 'Peercoin Blog',
                postsCount: 3,
                element: 'fm-medium-embed'
              };
              feedmirror.initialize(fmSettings);
            </script>
        </div>
    </div>
</section>


    <!-- NEWSLETTER SECTION -->
    <section id="six">
        <h1 class="title">Subscribe to our newsletter</h1>
        <p class="desc">Stay up-to-date with the latest Peercoin news by signing up for our Newsletter!</p>
        <div class="row">
            <div class="col-md-12" style="padding-bottom: 20px; padding-top: 20px;">
                <a href="https://peercoin.us9.list-manage.com/subscribe/post?u=654917bb4b69bbc6d026587a9&id=222c7e0877"><span><button class="button reverse shadow">Subscribe</button></span></a>
            </div>
        </div>

    </section>
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container footerwrapper">
            <div class="row">
                <div class="col-md-3">
                    <a class="twitter-timeline" data-width="400" data-height="350" data-dnt="true" data-link-color="#3cb054" href="https://twitter.com/PeercoinPPC?ref_src=twsrc%5Etfw">Tweets by PeercoinPPC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <ul>
                                <li class="title">Learn</li>
                                <li class="list">Article</li>
                                    <li class="sublist">subsection 1</li>
                                    <li class="sublist">subsection 2</li>
                                    <li class="sublist">subsection 3</li>
                                    <li class="sublist">subsection 4</li>
                                <li class="list">Article2</li>
                                    <li class="sublist">subsection 1</li>
                                    <li class="sublist">subsection 2</li>
                                    <li class="sublist">subsection 3</li>
                                    <li class="sublist">subsection 4</li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-6">
                            <ul>
                                <li class="title">Get Started</li>
                                    <li class="list">Article</li>
                                        <li class="sublist">subsection 1</li>
                                        <li class="sublist">subsection 2</li>
                                        <li class="sublist">subsection 3</li>
                                <li class="title">Get Started</li>
                                    <li class="list">Article</li>
                                        <li class="sublist">subsection 1</li>
                                        <li class="sublist">subsection 2</li>
                                        <li class="sublist">subsection 3</li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-6">
                            <ul>
                                <li class="title"><a href="wallet.html">Wallets</a></li>
                                <li class="title"><a href="projects.html">Projects</a></li>
                                <li class="list"><a href="roadmap.html">Roadmap</a></li>
                                    <li class="list"><a href="projects.html">Projects</a></li>
                                    <li class="list"><a href="https://medium.com/peercoin">Blog</a></li>
                                    <li class="list"><a href="foundation.html">Foundation</a></li>
                                    <li class="list"><a href="privacypolicy.html">Privacy Policy</a></li>
                                    <li class="list"><a href="cookiepolicy.html">Cookie Policy</a></li>
                                    <li class="list"><a href="termsofuse.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-6">
                            <ul>
                                <li class="title">Community</li>
                                    <li class="list"><a href="https://talk.peercoin.net/">Forum</a></li>
                                    <li class="list"><a href="https://www.reddit.com/r/peercoin">Reddit</a></li>
                                    <li class="list"><a href="https://t.me/peercoin">Telegram</a></li>
                                    <li class="list"><a href="https://discord.gg/XPxfwtG">Discord</a></li>
                                    <li class="list"><a href="https://github.com/peercoin/">Github</a></li>
                                    <li class="list"><a href="https://bitcointalk.org/index.php?topic=101820.0;topicseen">Bitcoin</a></li>
                                    <li class="list"><a href="https://www.facebook.com/Peercoin/">Facebook</a></li>
                                    <li class="list"><a href="https://twitter.com/PeercoinPPC">Twitter</a></li>
                                    <li class="list"><a href="https://www.youtube.com/user/PeerCoin">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container postfooter">
            <div class="row">
                <div class="col-12">
                    <span class="copyright">Copyright © 2019 Peercoin Foundation  |  <a href="#">All Right Reserved.</a></span>
                    <span class="right">Website Funded by Iterative Capital</span>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
