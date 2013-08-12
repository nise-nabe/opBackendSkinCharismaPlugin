<div class="row-fluid">
  <div class="well span5 center login-box">
    <?php echo $form->renderFormTag('symfony/login', array('class' => 'form-horizontal', 'method' => sfWebRequest::POST)) ?>
      <fieldset>
        <?php echo $form['username']->renderLabel(null, array('class' => 'control-label')) ?>
        <div class="control-group">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span><?php echo $form['username']->render(array('class' => 'input-large span10', 'autofocus' => true)) ?>
          </div>
        </div>
        <div class="clearfix"></div>

        <?php echo $form['password']->renderLabel(null, array('class' => 'control-label')) ?>
        <div class="control-group">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span><?php echo $form['password']->render(array('class' => 'input-large span10')) ?>
          </div>
        </div>
        <div class="clearfix"></div>

        <?php echo $form->renderHiddenFields() ?>
        <p class="center span5">
          <button type="submit" class="btn btn-primary">Login</button>
        </p>
      </fieldset>
    </form>
  </div>
</div>