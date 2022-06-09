<div class="article">
    <div class="header">
        <?php if($image_url = get_file_url($row->image_id, 'full')): ?>
            <header class="post-header">
                <img src="<?php echo e($image_url); ?>" alt="<?php echo e($row->title); ?>">
            </header>
            <div class="cate">
                <?php if(!empty($row->getCategory->name)): ?>
                    <ul>
                        <li>
                            <a href="<?php echo e(asset('news/category/'.$row->getCategory->slug)); ?>">
                                <?php echo e($row->getCategory->name ?? ''); ?>

                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <h2 class="title"><?php echo e($row->title); ?></h2>
    <div class="post-info">
        <ul>
            <li>
                <span> <?php echo e(__('BY ')); ?> </span>
                <?php echo e($row->getAuthor->getDisplayName() ?? ''); ?>

            </li>
            <li> <?php echo e(__('DATE ')); ?>  <?php echo e(display_date($row->updated_at)); ?>  </li>
        </ul>
    </div>
    <div class="post-content"> <?php echo $row->content; ?></div>
    <div class="space-between">
        <?php if(!empty($tags = $row->getTags()) and count($tags) > 0): ?>
            <div class="tags">
                <?php echo e(__("Tags:")); ?>

                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($tag->getDetailUrl()); ?>" class="tag-item"> <?php echo e($tag->name); ?> </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <div class="share"> <?php echo e(__("Share")); ?>

            <a class="facebook share-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($row->title); ?>" target="_blank" original-title="<?php echo e(__("Facebook")); ?>"><i class="fa fa-facebook fa-lg"></i></a>
            <a class="twitter share-item" href="https://twitter.com/share?url=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($row->title); ?>" target="_blank" original-title="<?php echo e(__("Twitter")); ?>"><i class="fa fa-twitter fa-lg"></i></a>
        </div>
    </div>
</div>
 
<?php /**PATH C:\wamp64\www\Ultimate-Booking-System-master\modules/News/Views/frontend/layouts/details/news-detail.blade.php ENDPATH**/ ?>