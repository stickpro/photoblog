<!--=============== Conten holder  ===============-->
<div class="content-holder elem scale-bg2 transition3" >
    <!--  Page title    -->
    <div class="fixed-title"><span>Contacts</span></div>
    <!--  Page title end   -->
    <!--  Page navigation   -->
    <div class="scroll-page-nav">
        <ul>
            <li><a  href="contact.html#sec1"></a></li>
            <li><a  href="contact.html#sec2"></a></li>
            <li><a  href="contact.html#sec3"></a></li>
        </ul>
    </div>
    <!--  Page navigation  end -->
    <div class="content full-height">
        <!--  Section contact info   -->
        <section class="section-columns" id="sec1">
            <div class="section-columns-img">
                <div class="bg" style="background-image:url({{asset(env('THEME'))}}/images/bg/22.jpg)" ></div>
            </div>
            <div class="section-columns-text">
                <div class="custom-inner">
                    <div class="container">
                        <h2>Свяжитесь со мной</h2>
                        <div class="separator"></div>
                        <div class="clearfix"></div>
                        <h3 class="subtitle">Look even slightly believable. If you are going to use a passage.</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <ul class="contact-list no-dec">
                            <li><span>Phone : </span><a href="tel:+79271351634">+7(927) 135-16-34</a></li>
                            <li><span>E-mail : </span><a href="mail:">yourmail@domain.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--  Section contact info end   -->
        <!--  Section social   -->
        <section class="no-padding">
            <div class="content">
                <div class="inline-facts-holder">

                    <div class="inline-facts">
                        <h6><a href="https://vk.com/id164515916">Вконтакте</a></h6>
                    </div>
                    <div class="inline-facts">
                        <h6><a href="https://www.instagram.com/shagovaa/">Instagram</a></h6>
                    </div>

                </div>
            </div>
        </section>
        <!-- social end  -->
        <!--  Section contact form  -->
        <section class="flat-form" id="sec3">
            <div class="container">
                <h2>Напишите мне</h2>
                <div class="separator-image"><img src="{{ asset(env('THEME')) }}/images/separator2.png" alt=""></div>
                <div id="contact-form">
                        <div id="message"></div>
                    <form method=post action={{asset ('/action.php')}} name=contactform id=contactform>
                        <input name=name type=text id=name class=inputForm2 onclick=this.select() value=Имя>
                        <input name=email type=text id=email onclick=this.select() value=E-mail>
                        <input id="check" name="check" type="hidden" value="" />
                        <textarea name=comments id=comments onclick=this.select()>Сообщение</textarea>
                        <input  type=submit class="send_message transition" id=submit value="Отправить сообщение" />
                    </form>

                </div>
            </div>
        </section>
        <!--  Section contact form end  -->
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>

<!-- content holder end -->