<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 2018/6/7
 * Time: 19:14
 */
use yii\helpers\Html;
?>
<script src=".\js\jq.js"></script>
<script>
    function but(form) {
        data = $(form).serializeArray();
        $.post("<?=\yii\helpers\Url::to(['add']);?>",data,function (r) {
            console.log(r);
            window.location.herf = 'www.day02.com/web/index.php?r=com/index';
        });
        return false;
    }

</script>
<form  method="post" onsubmit="return but(this)">
    <button type="submit">发布</button>
    <textarea name="content" id="" cols="30" rows="5"></textarea>
</form>

    <?php foreach($data as $v):?>
        <div class="div" style="border:1px solid #cedbeb;width:300px;">
            <div calss="title">标题： <?=Html::encode($v['content'])?>
                创建时间： <?=Html::encode($v['create_time'])?> </div>
            <div class="content">  <a href="<?=\yii\helpers\Url::to(['delete','id'=>$v['id']]) ?>">删除</a> </div>
        </div>
    <?php endforeach;?>

<?php echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
]);?>
