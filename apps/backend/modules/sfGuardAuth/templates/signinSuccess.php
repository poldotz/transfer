<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4 offset4">
            <div class="signin">
                <h2 class="center-align-text">Admin Transfer</h2>
                <form action="<?php echo url_for('@sf_guard_signin') ?>" class="signin-wrapper"  method="post">
                    <div class="content">
                        <?php if($form->hasErrors()): ?>
                            <div class="alert alert-error">
                                Sono presenti errori di compilazione, verificare i campi inseriti
                            </div>
                        <?php endif; ?>
                        <?php echo $form['_csrf_token'] ;?>
                        <div class="control-group <?php $form['username_or_email']->hasError() ? print('error') : print(''); ?> ">
                            <div class="input-prepend">
                                <?php echo $form['username_or_email']->renderLabel('Username o Email *',array('class'=>'control-label')); ?>
                                <div class="controls">
                                    <?php echo $form['username_or_email']->render(array('class'=>'span12')) ?>
                                    <?php if($form['username_or_email']->hasError()): ?>
                                        <span class="help-inline"><?php echo $form['username_or_email']->getError() ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="control-group <?php $form['password']->hasError() ? print('error') : print(''); ?> ">
                            <div class="input-prepend">
                                <?php echo $form['password']->renderLabel('Password *',array('class'=>'control-label')); ?>
                                <div class="controls">
                                    <?php echo $form['password']->render(array('class'=>'span12')) ?>
                                    <?php if($form['password']->hasError()): ?>
                                        <span class="help-inline"><?php echo $form['password']->getError() ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <input type="submit" class="btn btn-success pull-right"  value="Accedi" /></br>
                        <span class="checkbox-wrapper">
                            <?php echo link_to("Hai dimenticato la password?", "@sf_guard_password") ?></br>
                            <?php echo link_to("Contattaci", "@sf_guard_register") ?></br>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </form>
                <div class="copy">Copyright &copy; 2013 </div>
            </div>
        </div>
    </div>
</div>