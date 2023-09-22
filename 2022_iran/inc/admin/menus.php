<?php
function add_admin_menu(){
add_menu_page('car_controll','car_controll','manage_options','wp_apis_admin','wp_apis_admin_callback');
add_submenu_page('wp_apis_admin','add_Car','add_Car','manage_options','wp_apis_add','wp_apis_add_callback');
}
add_action('admin_menu','add_admin_menu');

function wp_apis_admin_callback(){
    include PLUGIN_TPL.'/admin/main.php';
}
// TODO : get data and save in db
function wp_apis_add_callback(){
    if(isset($_POST['submitbtn'])){
        //TODO : get data from form
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $company = $_POST['company'];
        $company_price = $_POST['company_price'];
        $price = $_POST['price'];
        $body_name = $_POST['body_name'];
        $type = $_POST['type'];
        $motor_type = $_POST['motor_type'];
        $motor = $_POST['motor'];
        $car_speed = $_POST['car_speed'];
        $start_speed = $_POST['start_speed'];
        $img_url = $_POST['img_url'];
        // var_dump($name , $brand,$company,$company_price,$price,$body_name,$type,$motor_type,$motor,'tset',$car_speed,$start_speed);

    global  $wpdb; //? use wpdb -> wordpress database
    //  $sql =  $wpdb->prepare("INSERT INTO {$wpdb->prefix}.'wp_cars' (`Name`, `Brand`, `Company`, `Company_Price`, `Price`, `Body_Name`, `Type`, `Motor_Type`, `Motor`, `Motor_Size`, `Car_Speed`, `Start_Speed`, `Img_Url`) VALUES ($name , $brand,$company,$company_price,$price,$body_name,$type,$motor_type,$motor,'tset',$car_speed,$start_speed,'resrs')" );
    // $wpdb->query($sql);
    $wpdb->insert($wpdb->prefix . 'cars',[
        'Name'=>$name,
        'Brand'=>$brand,
        'Company'=>$company,
        'Company_Price'=>$company_price,
        'Price'=>$price,
        'Body_Name'=>$body_name,
        'Type'=>$type,
        'Motor_Type'=>$motor_type,
        'Motor'=>$motor,
        'Motor_Size'=>"test",
        'Car_Speed'=>$car_speed,
        'Start_Speed'=>$start_speed,
        'Img_Url'=>$img_url
    ]);
    }
    include PLUGIN_TPL.'/admin/add.php';
}