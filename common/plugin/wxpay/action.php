<?php

/*
 * 这个页面很重要，这里就是需要放你的代码的地方。
 * 总共有三个部分，需要放你的代码。要放PHP代码！！！！
 * ==================================================================================
 * 如果你要用Session，请不要命名Session变量值为：$_SESSION['payjs_payment_info'] 和 $_SESSION['payjs_paid']。
 * 因为我已经用了
 * ==================================================================================
 * 在三个部分中，你需要用到的变量，我已经标注出来了。
 */

function after_payment_created($payjs_order_id, $out_trade_no, $total_fee, $code_url) {

    /*
     * 这里放置用户在账单刚刚创建之后，用户扫码之前，执行的代码。
     * 总共有4个你需要的变量：
             * $payjs_order_id PAYJS平台订单号 String[32]
             * $out_trade_no 用户端自主生成的订单号 String[32]
             * $total_fee 金额。单位：分 integer[16]
             * $code_url 扫码的二维码地址 String[64]
     * 建议你将这些数据存入你的数据库
     *
     */
    //======================================================================
    //代码放这里：






    //======================================================================
}

function after_payment_has_been_paid($payjs_order_id, $out_trade_no, $total_fee) {

    /*
     * 
     * 这里放置用户在付款成功之后，跳转到你页面之前，执行的代码
     *
     * 注意！如果你开启了异步账单通知，这里的代码有可能（我说的是有可能）执行两次，所以建议做好做好去重逻辑。
     *
     * 总共3个你需要的变量：
                 * $payjs_order_id PAYJS 平台订单号 String[32]
                 * $out_trade_no 用户端自主生成的订单号 String[32]
                 * $total_fee 金额。单位：分 integer[16]
     */
    //=======================================================================
    //代码放这里：
    
    
    
    
    
    
    //========================================================================
}

function after_cancel_payment($payjs_order_id, $out_trade_no, $total_fee, $code_url) {
    /*
     * 
     * 这里放置用户创建订单后，但又取消了订单，的时候执行的代码。
     * 一旦用户创建订单后，又不想付了，于是就会执行这里的代码
     * 总共4个你需要的变量：
             * $payjs_order_id PAYJS 平台订单号 String[32]
             * $out_trade_no 用户端自主生成的订单号 String[32]
             * $total_fee 金额。单位：分 integer[16]
             * $code_url 扫码的二维码地址 String[64]
     */
    //=========================================================================
    //代码放这里：
    
    
    
    
    
    
    //===========================================================================
}
