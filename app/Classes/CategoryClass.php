<?php
namespace App\Classes;

class CategoryClass {
    public $category_name;
    public $sub_category_list;
    private $category_list = [
        //replace space ' ' with underscore '_' and replace ampersand '&' with dash '-', replace '_-' with ', '
        "fundme"                    =>["fas fa-money-bill","http://www.fundme.worthcentillion.com"],
        "phones-tablets"            =>["fa-mobile",'Accessories for Mobiles', 'Phones', 'Smart Wears', 'Tablets'],
        "electronics"               =>["fa-tv",'Accessories & Supplies', 'Audio & Music Equipment', 'Computer Accessories', 'Computer Hardware', 'Computer Monitors','Headphones','Laptops & Computers','Networking Products','Photo & Video Cameras','Printers & Scanners','Security & Surveillance','Software','TV Equipments','Video Game Consoles','Video Games'],
        "vehicles"                  =>["fa-truck-pickup",'Buses & Minibuses','Cars','Heavy Equipments', 'Motorcycles & Scooters','Trucks & Trailers', 'Vehicle Parts & Accessories','Watercraft & Boats'],
        "properties"                =>["fa-home",'Houses & Apartments For Rent', 'Houses & Apartments For Sale', 'Land & Plots For Rent', 'Land & Plots for Sale', 'Commercial Property For Rent', 'Commercial Property For Sale', 'Event Centers and Venues', 'Short Let'],
        "home_appliances"           =>["fa-couch",'Furniture', 'Garden', 'Home Accessories', 'Home Appliances','Kitchen Appliances','Kitchen & Dining'],
        "health-beauty"             =>["fa-leaf",'Bath & Body', 'Fragrance', 'Hair Beauty', 'Makeup', 'Sexual Wellness', 'Skin Care', 'Tobacco Accessories', 'Tools & Accessories', 'Vitamins & Supplements'],
        "fashion"                   =>["fa-tshirt",'Bags','Clothing', 'Clothing Accessories', 'Jewelry', 'Shoes', 'Watches', 'Wedding Wear'],
        "sports_-arts-outdoors"     =>["fa-futbol",'Arts & Crafts', 'Books & Games', 'Camping Gear', 'CDs & DVDs', 'Musical Instruments & Gears', 'Sports Equipment'],
        "need_employment"           =>["fa-address-card",'Accounting & Finance CVs', 'Advertising & Marketing CVs', 'Arts & Entertainment CVs', 'Childcare & Babysitting CVs', 'Computing & IT CVs', 'Construction & Skilled Trade CVs', 'Consulting & Strategy CVs', 'Customer Care CVs', 'Driver CVs', 'Engineering & Architecture CVs', 'Farming & Veterinary CVs', 'Clerical & Administrative CVs', 'Gardening & Landscaping CVs', 'Health & Beauty CVs', 'Healthcare & Nursing CVs', 'Hotel CVs', 'Housekeeping & Cleaning CVs', 'Human Resources CVs', 'Internship CVs', 'Legal CVs', 'Logistics & Transportation CVs', 'Management CVs', 'Manual Labour CVs', 'Manufacturing CVs', 'Mining Industry CVs', 'Office CVs', 'Part-time & Weekend CVs', 'Quality Control & Assurance CVs', 'Research & Survey CVs', 'Restaurant & Bar CVs', 'Retail CVs', 'Sales & Telemarketing CVs', 'Security CVs', 'Sports Club CVs', 'Teaching CVs', 'Technology CVs', 'Travel & Tourism CVs'],
        "vacancies"                 =>["fa-briefcase",'Accounting & Finance CVs', 'Advertising & Marketing CVs', 'Arts & Entertainment CVs', 'Childcare & Babysitting CVs', 'Computing & IT CVs', 'Construction & Skilled Trade CVs', 'Consulting & Strategy CVs', 'Customer Care CVs', 'Driver CVs', 'Engineering & Architecture CVs', 'Farming & Veterinary CVs', 'Clerical & Administrative CVs', 'Gardening & Landscaping CVs', 'Health & Beauty CVs', 'Healthcare & Nursing CVs', 'Hotel CVs', 'Housekeeping & Cleaning CVs', 'Human Resources CVs', 'Internship CVs', 'Legal CVs', 'Logistics & Transportation CVs', 'Management CVs', 'Manual Labour CVs', 'Manufacturing CVs', 'Mining Industry CVs', 'Office CVs', 'Part-time & Weekend CVs', 'Quality Control & Assurance CVs', 'Research & Survey CVs', 'Restaurant & Bar CVs', 'Retail CVs', 'Sales & Telemarketing CVs', 'Security CVs', 'Sports Club CVs', 'Teaching CVs', 'Technology CVs', 'Travel & Tourism CVs'],
        "services"                  =>["fa-hands-helping",'Automotive Services', 'Building & Trades Services', 'Chauffeur & Airport transfer Services', 'Child Care & Education Services','Cleaning Services', 'Computer & IT Services','DJ & Entertainment Services', 'Party, Catering & Event Services','Health & Beauty Services', 'Fitness & Personal Training Services','Landscaping & Gardening Services', 'Manufacturing Services','Legal Services', 'Pet Services','Photography & Video Services', 'Recruitment Services','Logistics Services', 'Repair Services','Tax & Financial Services', 'Travel Agents & Tours','Wedding Venues & Services', 'Classes & Courses', 'Other Services'],
        "babies-kids"               =>["fa-baby",'Babies & Kids Accessories','Baby & Child Care','Children\'s Clothing','Children\'s Furniture','Children\'s Gear & Safety','Children\'s Shoes','Maternity & Pregnancy','Prams & Strollers','Toys'],
        "animals-pets"              =>["fa-dog",'Birds','Cats & Kittens','Dogs & Puppies','Fish','Pet\'s Accessories','Reptiles','Other Animals'],
        "agriculture-food"          =>["fa-apple-alt",'Farm Machinery & Equipment','Feeds, Supplements & Seeds','Livestock & Poultry','Meals & Drinks'],
        "commercial_equipment-tools"=>["fa-truck",'Industrial Ovens','Store Equipment','Restaurant & Catering Equipment','Manufacturing Equipment','Medical Equipment','Safety Equipment','Printing Equipment','Salon Equipment','Stationery','Manufacturing Materials & Tools','Stage Lighting & Effects'],
        "repair-construction"       =>["fa-tools",'Building Materials','Doors','Electrical Equipments','Electrical Tools','Hand Tools','Measuring & Layout Tools','Plumbing & Water Supply','Solar Energy','Windows','Other Repair & Construction Items']
    ];
    public function isCategory($category){
        $category = strtolower($category);
        foreach($this->category_list as $key => $cat){
            if($cat[1] == $category){
                $this->category_name = $cat;
                $this->sub_category_list = $this->category_list[$cat[1]];
                return true;
            }
        }
    }//end isCategory
    public function getCategoryList(){
        return $this->category_list;
    }

}
?>
