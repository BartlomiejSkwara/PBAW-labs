{extends file="main.tpl"}
{block name = body}

<!-- Banner -->
<!-- Note: The "styleN" class below should match that of the header element. -->
        <section id="banner" class="style2">
                <div class="inner">
                        <span class="image">
                                <img src="images/pic07.jpg" alt="" />
                        </span>
                        <header class="major">
                                <h1>Witam :></h1>
                        </header>
                        <div class="content">
                                <p>Lorem ipsum dolor sit amet nullam consequat<br />
                                sed veroeros. tempus adipiscing nulla.</p>
                        </div>
                </div>
        </section>

<!-- Main -->
        <div id="main">

                <!-- Jeszcze idk czy go użyje :> -->
{*                        <section id="one">
                                <div class="inner">
                                        <header class="major">
                                                <h2>Sed amet aliquam</h2>
                                        </header>
                                        <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna.</p>
                                </div>
                        </section>*}

                <!-- Linki i inny kontenet :> -->
                        
                        <section id="two" class="spotlights">
                                {foreach $elements as $element}
                     
                                    <section>
                                        
                                            <a href="generic.html" class="image">
                                            <img src="{$conf->appURL}\images\pic08.jpg" alt="amongu" data-position="center center" />
                                            </a>
                                            <div class="content">
                                                    <div class="inner">
                                                            <header class="major">
                                                                    <h3>{$element->title}</h3>
                                                            </header>
                                                            <p>{$element->description}</p>
                                                            <ul class="actions">
                                                                    <li><a href="{$conf->actionURL}{$element->action}" class="button">Learn more</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </section>
                                {/foreach}
                            

                                
                                
                        </section>

                <!-- Jeszcze idk czy go użyje :> -->
{*                        <section id="three">
                                <div class="inner">
                                        <header class="major">
                                                <h2>Massa libero</h2>
                                        </header>
                                        <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                                        <ul class="actions">
                                                <li><a href="generic.html" class="button next">Get Started</a></li>
                                        </ul>
                                </div>
                        </section>*}

        </div>











{/block}