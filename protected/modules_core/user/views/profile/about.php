<div class="panel panel-default">
   <div class="panel-heading"><?php echo Yii::t('ProfileModel.views_profile_about', '<strong>About</strong> this user'); ?></div>

    <div class="panel-body">

        <?php $firstClass="active";?>


        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <?php foreach ($user->profile->getProfileFieldCategories() as $category): ?>
                <li class="<?php echo $firstClass; $firstClass = ""; ?>"><a href="#profile-category-<?php echo $category->id; ?>"
                                                                            data-toggle="tab"><?php echo $category->title; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <?php $firstClass="active";?>

        <div class="tab-content">
            <?php foreach ($user->profile->getProfileFieldCategories() as $category): ?>

                <div class="tab-pane <?php echo $firstClass; $firstClass = ""; ?>" id="profile-category-<?php echo $category->id; ?>">
                    <form class="form-horizontal" role="form">
                        <?php foreach ($user->profile->getProfileFields($category) as $field) : ?>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo $field->title; ?></label>

                                <div class="col-sm-9">
                                    <p class="form-control-static"><?php echo $field->getUserValue($user, false); ?></p>
                                </div>
                            </div>


                        <?php endforeach; ?>

                    </form>
                </div>
            <?php endforeach; ?>
        </div>

    </div>


</div>