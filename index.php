<?php

/**
 * 干净，纯洁，淡雅朴素。
 * It's PureSuck For You.
 * 
 * @package PureSuck
 * @author MoXiify
 * @version 1.2.6
 * @link https://www.moxiify.cn
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="wrapper">

    <?php while ($this->next()): ?>
        <?php
        $hasImg = $this->fields->img ? true : false;
        ?>
        <article class="card post--text post--index main-item">
            <div class="post-inner" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <header class="card-item card-header">
                </header>

                <!-- 文章作者 -->
                <section class="card-item card-body">
                    <div class="wrapper post-wrapper">
                        <h1 class="card-title">
                            <a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>">
                                <?php $this->title() ?>
                            </a>
                        </h1>

                        <!-- 摘要 -->
                        <p class="post-excerpt">
                            <?php if ($this->fields->desc): ?>
                                <?= $this->fields->desc; ?>
                            <?php else: ?>
                                <?php $this->excerpt(80, ''); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </section>

                <footer class="card-item card-footer">
                    <div class="wrapper post-wrapper">
                        <div class="meta post-meta">
                            <a itemprop="datePublished" href="<?php $this->permalink() ?>" class="icon-ui icon-ui-date meta-item meta-date">
                                <span class="meta-count">
                                    <?php $this->date(); ?>
                                </span>
                            </a>
                            <a href="<?php $this->permalink() ?>#comments" class="icon-ui icon-ui-comment meta-item meta-comment">
                                <?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<nav class="nav main-pager" data-js="pager">
    <span class="nav-item-alt">
        第 <?= $this->_currentPage > 1 ? $this->_currentPage : 1; ?> 页 / 共 <?= ceil($this->getTotal() / $this->parameter->pageSize); ?> 页
    </span>
    <div class="nav nav--pager">
        <?php $this->pageLink('上一页'); ?>
        <i class="icon-record-outline"></i>
        <?php $this->pageLink('下一页', 'next'); ?>
    </div>
</nav>

<div class="nav main-lastinfo">
        <span class="nav-item-alt">
            <?php
            $options = Typecho_Widget::widget('Widget_Options');
            echo $options->footerInfo;
            ?>
        </span>
</div>
</main>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
