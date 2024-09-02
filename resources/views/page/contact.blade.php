@if(App::getLocale()=='en')
<div class="row mt-3">
      <div class="col-md-6 col-md-offset-3">
        <div class="">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-left">Send us mail</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label pl-0" for="name">Name</label>
              <div class="col-md-12 pl-0">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class=" control-label pl-0" for="email">Your E-mail</label>
              <div class="col-md-12 pl-0">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control ">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label pl-0" for="message">Your message</label>
              <div class="col-md-12 pl-0">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-left">
                <a href="#" class="btn btn-outline-primary text-dark" style="border-color: #000;border-radius:0px">Submit</a>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-2 mb-3">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Novza%2010%2C%20District%20-%20Chilanzar&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
      </div>
  </div>
  @else
  <div class="row mt-3">
    <div class="col-md-6 col-md-offset-3">
      <div class="">
        <form class="form-horizontal" action="" method="post">
        <fieldset>
          <legend class="text-left">Отправьте нам письмо</legend>

          <!-- Name input-->
          <div class="form-group">
            <label class="col-md-3 control-label pl-0" for="name">название</label>
            <div class="col-md-12 pl-0">
              <input id="name" name="name" type="text" placeholder="Ваше имя" class="form-control">
            </div>
          </div>

          <!-- Email input-->
          <div class="form-group">
            <label class=" control-label pl-0" for="email">Ваш адрес электронной почты</label>
            <div class="col-md-12 pl-0">
              <input id="email" name="email" type="text" placeholder="Ваш адрес электронной почты" class="form-control ">
            </div>
          </div>

          <!-- Message body -->
          <div class="form-group">
            <label class="col-md-3 control-label pl-0" for="message">Ваше сообщение</label>
            <div class="col-md-12 pl-0">
              <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
            </div>
          </div>

          <!-- Form actions -->
          <div class="form-group">
            <div class="col-md-12 text-left">
              <a href="#" class="btn btn-outline-primary text-dark" style="border-color: #000;border-radius:0px">Отправить</a>
            </div>
          </div>
        </fieldset>
        </form>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-2 mb-3">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Novza%2010%2C%20District%20-%20Chilanzar&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
    </div>
</div>

  @endif