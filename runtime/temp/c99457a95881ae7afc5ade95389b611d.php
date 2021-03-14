<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"template/b_new/html/comment\ajax.html";i:1580874046;}*/ ?>
    <!--评论开始-->
	<div class="main-head">
		
    <?php $__TAG__ = '{"num":"5","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
            <p class="smt_wrap clearfix">
                <span class="total"><span class="icons icons-xiaoxi"></span>评论（<t id="item_count"><?php echo intval($__PAGING__['record_total']); ?></t>） 还可以输入<t class="comment_remaining remaining" >200</t>字</span>
            </p>
    <form class="comment_form cmt_form clearfix"  >

       <script>$('.num').html('<?php echo $__PAGING__['record_total']; ?>');</script>
      <input type="hidden" name="comment_pid" value="0">
              <div class="sendComment">
                <img src="<?php echo mac_url_img(mac_default($user['user_portrait'],'/static/images/touxiang.png')); ?>">
                <input class="comment_content commentArea" placeholder="说点什么吧" name="comment_content">
                <div class="comment_submit Commentsend" type="button"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1048 1024"><path d="M675.48206831 405.43059956c-21.34102395 0-38.61709113-17.27606717-38.61709114-38.61709114 0-21.34102395 17.27606717-38.61709113 38.61709113-38.6170903s38.61709113 17.27606717 38.6170903 38.6170903c0 21.34102395-17.27606717 38.61709113-38.6170903 38.61709114M825.88547437 93.44515543c-1.0162392 0-3.04871759 1.0162392-4.06495679 1.0162392L171.42740857 347.50496286c-32.51965512 9.14615277-57.92563586 35.56837271-67.07178864 68.08802865-9.14615277 34.55213351 0 69.10426785 25.40598074 94.5102486 5.08119598 5.08119598 11.17863116 8.12991357 18.29230555 10.1623928L284.22996353 557.86648401l104.67264139 30.48717673c48.77948309-45.7307655 144.30597089-134.14357891 159.54955883-148.37092768 15.24358878-15.24358878 39.63333032-15.24358878 54.87691911 0 15.24358878 15.24358878 15.24358878 39.63333032 0 54.87691911-18.29230637 18.29230637-132.11110052 123.98118613-157.51708127 147.35468847L498.65644147 883.06303852c2.03247839 7.11367438 5.08119598 14.22734958 10.16239279 19.30854556 18.29230637 18.29230637 42.68204792 28.45469834 69.10426703 28.45469833 8.12991357 0 17.27606717-1.0162392 25.40598157-3.04871759 33.53589431-9.14615277 58.94187506-33.53589431 68.08802783-66.05555026L943.76922531 218.44258075c1.0162392-2.03247839 1.0162392-3.04871759 2.0324784-5.08119598 9.14615277-34.55213351 0-69.10426785-25.40598074-94.5102486C894.98974222 94.46139462 860.43760788 84.29900183 825.88547437 93.44515543z"></path></svg></div>
              </div>
                <?php if($comment['verify'] == 1): ?><input class="mac_verify" type="text" id="verify" name="verify" placeholder="验证码" /><?php endif; ?>

    </form>
	</div>
    <div class="cmt_wrap" >
            <?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>
            <div class="cmt_item clearfix">
                <div class="item_con fl" style="margin-top: 11px;">
                <a class="face_wrap fl" href="javascript:;" style="margin-right: 5px;"><img class="face" src="<?php echo mac_get_user_portrait($vo['user_id']); ?>"></a>
                  <div class="con">
                    <p class="top">
                       <a class="name" href="javascript:;"><?php echo $vo['comment_name']; ?></a>
                        
                        <span class="click-ding-gw" style="float: right;">
                            <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
                                <i class="icon-ding"></i>
                                <em class="digg_num icon-num"><?php echo $vo['comment_up']; ?></em>
                            </a>
                            <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
                                <i class="icon-dw"></i>
                                <em class="digg_num icon-num"><?php echo $vo['comment_down']; ?></em>
                            </a>
                        </span>
                    </p>
                    <?php echo mac_em_replace($vo['comment_content']); ?>
                    <div class="gw-action">
                       <span class="fr"><a><?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?> (<?php echo long2ip($vo['comment_ip']); ?>)</a></span>
                        <a class="comment_reply" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">回复</a>
                        <a class="comment_report" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">举报</a>
                    </div>
                  </div>
                    <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$vo1): ?>
                    <div class="cmt_item clearfix">
                        <div class="item_con fl">
                        <a class="face_wrap fl" href="javascript:;"><img class="face" src="<?php echo mac_get_user_portrait($vo1['user_id']); ?>" style="padding: 11px;margin-top: -13px;"></a>
                          <div class="con" style=" border-bottom-color: rgb(215, 215, 215);border-bottom-width: 1px;border-bottom-style: dotted;padding-bottom: 10px;">
                            <p class="top">
                                <a class="name" href="javascript:;"><?php echo $vo1['comment_name']; ?></a>
                                <a >(<?php echo long2ip($vo1['comment_ip']); ?>)</a>
                            </p>
                            <?php echo mac_em_replace($vo1['comment_content']); ?></p>
                          </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>

            <?php endforeach; endif; else: echo "" ;endif; ?>



        </div>        </div>        </div>

    <!--评论结束-->2012408449
<?php if($__PAGING__['page_current']!=''): ?>
    <div class="mac_pages" >

        <!--div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div-->

        <div class="page_info">

            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show(1)" title="首页">首页</a>

           <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>

            <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>

            <?php else: ?>

            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $num; ?>')" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>

            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')" title="尾页">尾页</a>
        </div>

    </div>
<?php else: ?> 
 <h3 class="main_tit_area main_tit_v1"style="text-align: center;padding: 50px;color: #888;"><div class="main_tit_bg">(ฅ>ω<*ฅ)还没有评论,快来抢沙发啊~~~</div></h3> <?php endif; ?>
<style>
.sendComment.sendComment {
    margin-top: .64rem;
    margin-bottom: .42667rem;
    padding: 0 .5rem 0 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;    width: 100%;
}
.sendComment img{
    width: 1.28rem;
    height: 1.28rem;
    margin-right: .64rem;
    border-radius: 50%;
}
.sendComment input{    border: 0;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    border-radius: .64rem;
    background: #f4f4f4;
    color: silver;
    font-size: .59733rem;
    height: 1.28rem;
    line-height: 1.28rem;
    padding: 0 .42667rem;width: 80%;
}
.sendComment .Commentsend {
    transition: ease .15s;
    position: absolute;
    right: 1.2rem;
    width: 1rem;
    fill: #fb7299;
}
#verify {
    text-align: center;
    margin-left: 2rem;
    border: 0;
    border-radius: .64rem;
    background: #f4f4f4;
    color: silver;
    height: 1.2rem;
    line-height: 1.2rem;
    padding: 0 .2rem;
    width: 4rem;
    font-size: .525rem;
}
.mac_verify_img{
    border-radius: .64rem;
    height: 1.2rem;
    line-height: 1.2rem;
    width: 4rem;
}
.mac_verify{
    display: none;
}
.mac_pages{text-align: center;padding: 15px 0 0 0;/* overflow: hidden;*/}
.mac_comment .cmt_form{margin-bottom: 0;}
.mac_comment .smt{margin-top: 0;margin-right: 12px;color: #454545;position: absolute;bottom: 0;right: 0;}
.mac_comment .smt .cmt_post{margin-left: 10px;}
.total t{color: #fb7299;padding: 0 2px;}
.mac_comment .smt_wrap {
    width: 100%;
    padding-top: 8px;
    /* margin-top: 8px; */
    /* background: #f5f5f5; */
    border-radius: 16px;
    display: inline-block;
    /* margin: 0px 0 10px 0; */
    /* text-align: center; */
}
.mac_comment .smt_wrap .total {
    font-size: .625rem;
    font-weight: unset;
    text-align: center;
    display: inline-block;
    color: #666;
}
em{font-style: normal;vertical-align: -2px;}
.mac_comment .item_con .click-ding-gw a i, .mac_digg a i{display: inline-block;width: 24px;height: 15px;vertical-align: middle;}
.mac_comment .item_con .click-ding-gw a, .mac_digg .click-ding-gw a{color: #000;margin-left: 10px;}
.mac_pages .page_tip{margin-left: 4px;color: #fb7299;font-weight: normal;padding: 10px;}
.mac_pages .page_link{display: inline-block;padding: 4px 6px;border: 1px solid #ddd;margin-left: 4px;border-radius: 2px;color: #666;}
.mac_pages .page_current{display: inline-block;background-color: #2196F3;border: 1px solid #2196F3;color: #fff;border-radius: 2px;width: 30px;padding: 4px 6px;}
.mac_comment .item_con .con{margin-top: 0px;}
.mac_comment .item_con .gw-action{padding-top: 15px;}
.fr{-margin-left: 10px;float: left;}
.mac_comment .cmt_wrap .item_con .cmt_item .gw-action{text-align: right;clear: left;}
.mac_comment .face_wrap img{border-radius: 50%;}
.mac_comment .item_con .con img{vertical-align: middle;max-width: .94rem;max-height: .56rem;}
.mac_comment .input_wrap .face-box img{display: inline-block;margin: 2px;max-width: .94rem;max-height: .56rem;}
.mac_comment .input_wrap .face-box{height: 3.5rem;overflow-y: auto;padding: .1rem;width: 319px;border: 1px solid #eee;border-radius: 3px;}
</style>
 <script>
$(".sendComment").click(function() {$(".mac_verify").show();});</script>