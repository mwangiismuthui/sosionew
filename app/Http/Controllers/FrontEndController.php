<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Product;
use App\Slider;

class FrontEndController extends Controller
{
    //

    public function index(){
        $products = Product::all();
        $sliders = Slider::all();
        $meta_title ="Home|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="Fruits in Kenya,herbs,spices,brocolli,Kenya,exports,Vegetables,Kenya herbs exporters,kenya fruit exporters,kenya vegetables exporters,kenya fruit growers,kenya vegetable growers ,kenya vegetable growers";
        $meta_url ="sosiofruitsandvegetables.com";
       $name = "Fruits and Vegetables"; 
       return view ('export.index',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name','products','sliders'));
    }


    public function products(){
        $meta_title ="Products|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Check Out our wide variety of Fresh Kenyan fruits,Verbs and Vegetables";
        $meta_keyword ="Fruits in kenya,herbs,spices,brocolli,Kenya,exports,Vegetables";
        $meta_url ="sosiofruitsandvegetables.com/products";
       $name = "Products"; return view ('export.products',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }

    public function about(){
        $meta_title ="About|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="We are Kenyan exporters of organically produced farm products ranging from fresh fruits,vegetables and spices to a wide range of global consumers in different parts of the world .";
        $meta_keyword ="fruit exportes in Kenya ,Kenya fruits,Kenya herbs,vegetables in Kenya";
        $meta_url ="sosiofruitsandvegetables.com/about";
       $name = "About";
        return view ('export.about',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function contact(){
        $meta_title ="Contact|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="For any inquires or queries on our products contact us";
        $meta_keyword ="mint in Kenya";
        $meta_url ="sosiofruitsandvegetables.com/contact";
       $name = "Contacts"; return view ('export.contact',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
      
    public function order(){

            $meta_title ="Order|Sosio Fruits and Vegetables";
            $meta_author ="Mwangi David Muthui|0721257308";
            $meta_site_title ="Sosio Fruits and Vegetables";
            $meta_description ="Order online any of our farm fresh products and will deliver the best";
            $meta_keyword ="";
            $meta_url ="sosiofruitsandvegetables.com/order/online";
        $name = "Order Online"; 
        return view ('export.order',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }


    // ....................Products..................//
    public function productDetails($id){

       $products =Product::where('id',$id)->get();
       $productphotos =ProductPhoto::where('product_id',$id)->get();
        $meta_title ="Mangoes|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya mangos stand tall among the best mangos in the world, making Kenya a key source of juicy and healthy mangos to the world’s leading mango markets.";
        $meta_keyword ="mangoes,Kenya mangoes,apple mango,ngowe mangoes,kent mangoes,Kenya fruits,mango kenya,mango season in Kenya,mango varieties in Kenya,types of mangoes in Kenya,types of mangoes,mango species";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenya-mangoes";
        $name = "Mangoes"; 
       return view ('export.product_details',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name','productphotos','products'));
    }
    public function carrots(){

        $meta_title ="Carrots|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="We pride ourselves in growing and exporting to the world the very best Kenyan carrots anywhere, nourished by the red volcanic soils of the Kenya and enriched by the African sun.";
        $meta_keyword ="kenya baby carrots,nantes carrots Kenya,Super Koruda,carrots,places where carrots are grown in Kenya,carrot prices in Kenya,carrot varieties in Kenya";
        $meta_url ="sosiofruitsandvegetables.com/fresh-vegetables/kenya-carrots";
       $name = "Carrots"; 
       return view ('export.carrots',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function avocadoes(){
        $meta_title ="Avocado|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="The warm Kenyan climate provide a great production enviroment for our amazing avocadoes";
        $meta_keyword ="Kenya avocadoes,Kenya Hass,Kenya Fuete,avocado exporters in Kenya,avocado production in kenya,avocado varieties in Kenya";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenyan-avocadoes";
        $name = "Avocadoes";
        
        return view ('export.avocadoes',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function spices(){
        $meta_title ="Spices|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Our great variety of Kenyan Spices fresh from the rich Kenyan soils provides the greatest nutrient benefits to your body.";
        $meta_keyword ="Kenya pepper,Kenya Tumeric,Kenya Ginger,spices grown in Kenya,spices brands in Kenya,Ginger farming in Kenya,ginger varieties,Tumeric varieties,";
        $meta_url ="sosiofruitsandvegetables.com/fresh-spices/spices-in-kenya";
       $name = "Spices"; 
       return view ('export.spices',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function herbs(){
        $meta_title ="Herbs|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Our great variety of Kenyan Herbs fresh from the rich Kenyan soils provides the greatest nutrient benefits to your body.";
        $meta_keyword ="Kenya mint,Kenya Thyme,Kenya Chives,Kenya Tarragon,Kenya Corriander,Kenya Basil,herbs exporters in Kenya,herbs growing in Kenya,herbs grown in Kenya,Kenya fresh herbs";
        $meta_url ="sosiofruitsandvegetables.com/fresh-herbs/herbs-in-kenya";
       $name = "Herbs"; 
       return view ('export.herbs',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function tree_tomato(){

        $meta_title ="Tree Tomato|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description =" Kenyan Tree tomato tolerates many soil conditions as long as it is well drained, but compost –enriched soil is best for optimal growth which is makes it thrive her in Kenya";
        $meta_keyword ="Kenya fruits,Kenya Tamorillos,Kenya Tree Tomato,";
        $meta_url ="sosiofruitsandvegetables.com/fresh-friuts/kenya-tree-tomato";
       $name = "Tree Tomato"; 
       return view ('export.tree_tomato',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function dill(){

        $meta_title ="Dill|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya dill, a delicious part of diets around the world today, were once so exotic and correspondingly expensive-that people would rent them in royal hothouses in Europe";
        $meta_keyword ="Kenya dill,dill herb,dill farming in kenya,dill exporters in kenya,kenya dill benefits";
        $meta_url ="sosiofruitsandvegetables.com/fresh-herbs/kenya-dill";
       $name = "Dill"; 
       return view ('export.dill',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function apples(){

        $meta_title ="Apples|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="In Kenya, Apples thrives well in the highland areas surrounding Mount Kenya with the Wambugu apple being the preferred and most adopted variety.";
        $meta_keyword ="Kenya Custard Apple,Apples,kenya apple exporters,kenya apple varieties,apples benefits";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenya-fresh-apples";
       $name = "Apples";
        return view ('export.apples',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function oregano(){

        $meta_title ="Oregano|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description =" Sosio exporters have the best oregano which is best used in omelettes, pizzas and pasta sauces.";
        $meta_keyword ="Oregano plant in Kenya,oregano price in kenya,oregano exporters in kenya,oregano benefits";
        $meta_url ="sosiofruitsandvegetables.com/fresh-herbs/kenya-oregano";
       $name = "Oregano"; 
       return view ('export.oregano',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function butternut(){

        $meta_title ="Butternut|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya Butternut is a vine like plant belonging to the cucurbitaceace family and most common among the winter –squash vegetables.";
        $meta_keyword ="Kenya butternut,Burpee`s butter bush,Waltham butternut,Butter boy hybrid,butternut varieties in Kenya ,butternut exporters in kenya ,butternut benefits";
        $meta_url ="sosiofruitsandvegetables.com/kenya-vegetables/butternut-in-kenya";
       $name = "Mangoes"; return view ('export.butternut',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function beetroot(){
        $meta_title ="Beetroot|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya beetroot is a hearty nutritious vegetative fruit with a healthy pink color at the fruit, root and stem with the leaves a clear green.";
        $meta_keyword ="Kenya beetroot,Bolt hardy,Detroit 6 Rubidus,Cylindra,beetroot varieties in Kenya,beetroot exporters in kenya,beetroot farming in kenya,beetroot benefits";
        $meta_url ="sosiofruitsandvegetables.com/fresh-vegetables/kenya-beetroot";
        $name = "beetroot";
        return view ('export.beetroot',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function brocolli(){

        $meta_title ="Broccoli|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description =" Kenya is uniquely suited for growing broccoli thanks to its near perfect environment for growing a wide variety of fruits and vegetable";
        $meta_keyword ="Kenya Broccoli,Green broccoli (Calabrese),Broccolini,Broccoflower (Romanesco),organic broccoli,organic kenya brocolli,broccoli exporters in kenya,fresh kenyan broccoli,broccoli benefits,broccoli uses";
        $meta_url ="sosiofruitsandvegetables.com/kenya-vegetables/kenya-brocolli";
       $name = "Mangoes"; return view ('export.brocolli',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function marjoram(){

        $meta_title ="Marjoram|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Exporters of the best organic Kenyan Marjoram";
        $meta_keyword ="Kenya marjoram,fresh marjoram,conditions for farming marjoram in kenya,marjoram benefits,marjoram exporters in kenya,";
        $meta_url ="sosiofruitsandvegetables.com/herbs-in-kenya/kenya-marjoram";
       $name = "Mangoes"; return view ('export.marjoram',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function cabbage(){

        $meta_title ="Cabbage|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya cabbage (botanical name Brassica Oleracea) constitutes one of the most common family of vegetables in terms of daily use in the country and the world. ";
        $meta_keyword ="Kenya Cabbage,Gloria F1,Pruktor F1,Riana F1,Queen F1,Serena F1,kenya fresh cabbages,cabbage exporters in kenya,cabbage varieties in kenya , kenyan cabbage benefits,cabbage farming in Kenya";
        $meta_url ="sosiofruitsandvegetables.com/fresh-vegetables/cabbages-in-kenya";
       $name = "Mangoes"; return view ('export.cabbage',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function thorn_mellon(){

        $meta_title ="Thorn Mellon|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Nothing compares to Kenya thorn melon (Kiwano), with its golden or yellow-orange fruit shell straight from the sun.";
        $meta_keyword ="Kenya Thorn Mellon,Kiwano, passion mwitu, parachichi mwitu,thorn mellon exporters in kenya,kenya thorn mellon benefits,kenya thorn mellon health benefits,thorn mellon price in kenya";
        $meta_url ="sosiofruitsandvegetables.com/kenya-thorn-mellon/thorn-mellon";
       $name = "Mangoes"; return view ('export.thorn_mellon',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function straw_berries(){

        $meta_title ="Straw Berries|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Our Kenya strawberries are hygienically handled, with meticulous grading to ensure you only get the highest quality strawberries from Kenya.";
        $meta_keyword ="Kenya strawberries,Chandler,pajaro Douglas,Tioga selva,Rabunda,Tri-Star,Tribute,strawberry exporters in Kenya,strawberry farming in kenya,strawberry market in kenya,strawberry varieties in kenya";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/strawberries-in-kenya";
       $name = "Mangoes"; return view ('export.straw_berries',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function passion_fruit(){

        $meta_title ="Passion Friut|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="The climate of the Rift Valley geological demarcation, which is tropical and partly temperate, is the secret to the high yields of Kenya passion";
        $meta_keyword ="Kenya passion fruit,Passiflora flavicarpa,Passiflora edulis,passionfruit exporters in kenya,passion fruit varieties in kenya,Kenyan passion fruit health benefits";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenya-passion-fruit";
       $name = "Mangoes"; return view ('export.passion_fruit',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function pears(){

        $meta_title ="Pears|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Kenya Pears are some of the most abundant fruits in Kenya and indeed the second most essential fruit in the whole of the tropics. ";
        $meta_keyword ="Kenya Pears,tropical friuts,kenyan pears varieties,pears exporters in kenya,kenya pears health benefits,pears fruit in kenya,pears growing in kenya ";
        $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenya-pears";
       $name = "Mangoes"; return view ('export.pears',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function rosemary(){

        $meta_title ="Rosemary|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="We are a proud supplier of fresh and high quality Kenyan rosemary, and ensuring that its freshness will reach millions of shopping bags miles away, worldwide";
        $meta_keyword ="Rosemary exporters in kenya ,rosemary varieties in kenya,rosemary prices in kenya,rosemary growing in kenya";
        $meta_url ="sosiofruitsandvegetables.com/fresh-kenyan-rosemary/rosemary-in-kenya";
       $name = "Mangoes"; return view ('export.rosemary',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function curry_leaves(){

        $meta_title ="Curry Leaves|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="The Kenya curry leaves are popular across various types of cuisines around the world where they are used as flavouring agents";
        $meta_keyword ="Curry Leaves,Kenya herbs,kenya curry leaves exporters,curry leaves growers in kenya ,curry leaves benefits,kenya conditions for growing curry leaves";
        $meta_url ="sosiofruitsandvegetables.com/kenyan-herbs/fresh-curry-leaves";
       $name = "Mangoes"; return view ('export.curry_leaves',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function lemon_grass(){

        $meta_title ="Lemon Grass|Sosio Fruits and Vegetables";
        $meta_author ="Mwangi David Muthui|0721257308";
        $meta_site_title ="Sosio Fruits and Vegetables";
        $meta_description ="Full of flavor and aromatic just as you would imagine it, that is the Kenyan Lemon grass for you.";
        $meta_keyword ="Lemon grass,Kitunguu,Kenya Lemon Grass,Citronella,Java citronella,East Indies,lemon grass exportes in kenya,lemon grass prices in kenya,lemon grass varieties in kenya,lemon grass growers in Kenya.";
        $meta_url ="sosiofruitsandvegetables.com/kenya-lemon-grass/fresh-lemon-grass";
       $name = "Mangoes"; return view ('export.lemon_grass',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,name'));
    }
    public function contact_form(Request $request){
try {
    $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $client_message = $request->input('message');

        $data = array(
            'client_email' =>$email,
            'recipient_email' =>'sosioexporters@gmail.com',
            'client_name' => $name,
            'subject' => $subject,
            'client_message'=>$client_message
            
        );
     
        Mail::send('export.contact_email', $data, function($message) use ($data) {
            $message->to($data['recipient_email'], $data['client_name'])
            ->subject($data['subject']);
        });
     
} catch (\Throwable $th) {
    return redirect()->back();
}
       

    }
    public function order_form(Request $request){
try {
    $name = $request->input('name');
    $email = $request->input('email');
    $product = $request->input('product');
    $quantity = $request->input('quantity');
    $additional_info = $request->input('additional_info');

    $data = array(
        'client_email' =>$email,
        'recipient_email' =>'sosioexporters@gmail.com',
        'client_name' => $name,
        'product' => $product,
        'quantity'=>$quantity,
        'additional_info'=>$additional_info
        
    );
 
    Mail::send('export.order_form', $data, function($message) use ($data) {
        $message->to($data['recipient_email'], $data['client_name'])
        ->subject($data['product']);
    });
    return redirect()->back();
} catch (\Throwable $th) {
    return redirect()->back();
}
        

    }
    public function newsletter(Request $request){

        // try {
            $email = $request->input('email');
           
            $data = array(
                'client_email' =>$email,
                'recipient_email' =>'sosioexporters@gmail.com',
               
                
            );
         
            Mail::send('export.newsletter', $data, function($message) use ($data) {
                $message->to($data['recipient_email'])
                ->subject('Newsletter  Request');                
            });
            return redirect()->back();
        // } catch (\Throwable $th) {
        //     return redirect()->back();
        // }
      

    }
  
}
