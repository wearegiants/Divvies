<div id="product--add" class="fs-cell fs-lg-12 fs-md-6 fs-sm-half">


<!-- Recurring Step: 1 -->

<input name="shopify_customer_id" type="hidden" value=""> 
<input name="email" type="hidden" value=""> 
<input name="address1" type="hidden" value=""> 
<input name="address2" type="hidden" value=""> 
<input name="city" type="hidden" value=""> 
<input name="company" type="hidden" value=""> 
<input name="country" type="hidden" value=""> 
<input name="first_name" type="hidden" value=""> 
<input name="last_name" type="hidden" value=""> 
<input name="phone" type="hidden" value=""> 
<input name="province" type="hidden" value=""> 
<input name="zip" type="hidden" value="">
<div class="product_rp_div p2725248579"><style class="bold_style" scoped="">.product_rp_div{background-color: #;max-width: 100%;border-color: #;border-width: 0px;border-style: solid;margin-top: 0px;margin-bottom: 15px;margin-left: 0px;margin-right: 0px;}.one_time_div, .recurring_div, .frequency_label, .mix_div{color: #;font-size: 15px;}.one_time_div, .recurring_div, .mix_div{padding-top: 10px;padding-bottom: 10px;padding-left: 15px;padding-right: 15px;margin-top: 0px;margin-bottom: 0px;margin-left: 0px;margin-right: 0px;border-color: transparent;border-width: 1px;border-style: solid;}.bold_active{background-color: #F5F5F5;border-color: #DBDBDB;border-width: 1px;border-style: solid;}.frequency_label{padding-top: 10px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;}.frequency_num, .frequency_type{margin-top: 0px;margin-bottom: 0px !important;margin-left: 10px;margin-right: 0px;width: auto;display: inline-block;}.recurring_title{color: #363636;font-size: 20px;font-weight:bold;padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;}.new_discounted_price{color: # CF0C0C;font-size: 16px;}.bold-ro .tooltip-inner{background-color: #000000;opacity: 0.9;color: #FFFFFF;font-size: 12px;border-radius: 3px;padding: 10px;}.bold-ro .tooltip.bottom .tooltip-arrow{border-bottom-color: #000000;}</style><div class="recurring_title"></div><div class="one_time_div bold_active"><label><input type="radio" value="0" name="recurring_radio_btn" class="one_time_radio_btn" checked=""><span> One-time purchase</span></label></div><div class="recurring_div bold-ro"><label><input type="radio" value="1" name="recurring_radio_btn" class="recurring_radio_btn"> Subscribe</label><div class="frequency_div"><div class="frequency_label">Order will ship every:<span style="padding-left:10px">1</span><input type="hidden" class="frequency_num" value="1"><span style="padding-left:10px">Week(s)</span><input type="hidden" class="frequency_type" value="2"></div></div></div></div>

<a class="btn btn-shopify small" id="customButton" data-toggle="modal" data-target="#myModal" style="display:none;">Add to cart</a>


<script>

generate_rp_tag = false;
add_to_order_tag = false;
group_id = 0;

if (typeof rp_prod == 'undefined'){
rp_prod = {};
}
rp_prod.p2725248579 = {};

rp_prod.p2725248579.v7947354051 = {"rp_group_id":3134};

rp_prod.p2725248579.v8424582723 = {"rp_group_id":3134};



jQuery(document).ready(function(){
addRPHandler();
setTimeout(addRPHandler, 700);


function addRPHandler(){

jQuery("[name='id'],.single-option-selector").unbind();
jQuery("[name='id'],.single-option-selector").change(function(){

var myForm = $('.product_rp_div.p2725248579').closest("form");
var idInput = myForm.find("[name='id']");
var myVariant = idInput.val();
var prodId = 2725248579;


group_id = rp_prod['p'+prodId]["v"+myVariant].rp_group_id;

//add recurring order widget  


if(group_id){
$('.product_rp_div.p2725248579').show(); 
}

if(!generate_rp_tag && group_id)
$('.product_rp_div.p2725248579').append('<script async class="generate_rp" src="https://ro.boldapps.net/recurring_settings/generate_rp?&shop_url=divvies.myshopify.com&group_id='+group_id+'&customer_id=&product_id='+prodId+'&variant_id='+myVariant+'"></'+''+'script>');                      

generate_rp_tag = true;                              


//toggle buttons                                


if(JSON.stringify(group_id) == null){
$('.product_rp_div.p2725248579').hide();
$('#customButton').hide();
$('.addtocart').show();
}
//add add_to_order button
if(!add_to_order_tag)
$('.product_rp_div.p2725248579').append('<script async class="add_to_order" src="https://ro.boldapps.net/recurring_settings/add_to_order?&shop_url=divvies.myshopify.com&group_id='+group_id+'&customer_id=&product_id='+prodId+'&variant_id='+myVariant+'"></'+''+'script>'); 

add_to_order_tag = true;  

//toggle add to order btn

if(JSON.stringify(group_id) == null){
$('.add_modal_btn').hide(); 
}else{
$('.add_modal_btn').show(); 
}

});
jQuery("[name='id']").change();

}
});
</script>

<input type="submit" name="add" id="add" class="btn btn-primary addtocart" value="Add to cart" style="width:100%;" data-text="Add to cart">
<!-- bold-ro-liquid --> <div class="bold_add_to_orders" style="display: none;"> </div> <!-- bold-ro-liquid -->
</div>