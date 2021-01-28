<?php
    namespace App\Classes;
    use App\Classes\{CatSvgClass};

    class FieldsClass {
        public function getFields($category,$subcategory){
            /*This is array containing the input form field for the various categories as their table was created in the db. The first array of each form field should represent what kind of input field it is eg select, checkbox etc and if it's not set, it should default to select field.*/
            /* the field names with () will be formatted at the frontend for hitch free save to db */
            $phones_tablets = [
                //phones
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'phones' => [1,2,3,20,5,6,7,8,9,10,11,12,13,14,17,18],
                    'tablets' => [1,2,3,4,5,6,7,14],
                    'smart_wears' => [1,15,16,'Brand'=>['Apple','Samsung','Androidly']],
                    'accessories_for_mobiles' => [17,19],
                ],
                'Brand'=> [],//1
                'Model'=> [],
                'RAM (GB)'=> [],
                'Storage Capacity (GB)'=> [],
                'Screen Size (inches)'=> [],//5
                'Color'=> [],
                'Operating System'=> ['Android','iOS','Not Available'],
                'Display Type'=> [],
                'Resolution'=> [],
                'SIM'=> [],//10
                'Card Slot'=> [],
                'Main Camera (MP)'=> [],
                'Selfie Camera (MP)'=> [],
                'Battery (mAh)'=> [],
                //Smart Wears
                'Band Color'=> [],//15
                'Band Material'=> [],
                'Condition'=> ['New','Used','Refurbished'],
                'Used State'=> [
                    'No Fault','Cracked Screen','Cracked Body','Cracked Front & Back','Cracked Camera','Battery Not Working'
                ],
                //accessories
                'Type'=> [
                    'Cases','Cell Phones and Tablet Cables','Chargers','Charging Stations','Headsets','Keypads','Memory Cards','Mobile Phone Battery','MP3 Sunglasses','Phone Screens','Power Bank','Screen Protector','Selfie Sticks','Smartphone Controllers','Stylus','Tablet Keyboards','Tile Trackers','Virtual Reality Glasses','Others'
                ],
                'Internal Storage (GB)'=>[],//20
                'table_model'=>'Phone_tablet',
            ];//end phone_tablets
            $electronics = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'accessories_&_supplies' => [1,22],
                    'audio_&_music_equipment' => [1,2,4],
                    'computer_accessories' => [1,2,4,'Brand'=>['HP','Apple','Acer','Samsung','Lenovo']],
                    'computer_hardware' => [1,4],
                    'computer_monitors' => [2,9,13,18,12,14,15,16,4],
                    'headphones' => [2,1,17,19,20,21,10],
                    'laptops_&_computers' => [1,2,3,4,5,11,12,13,6,7,8,9,24,25,26,],
                    'networking_products' => [2,1,27,28],
                    'photo_&_video cameras' => [1,2,3,4,5],
                    'printers_&_scanners' => [1,2,3,4,5,'Brand'=>['HP','Sharp','Canon','Konica Minolta','Other']],
                    'security_&_surveillance' => [2,1,3,19,29,4,5],
                    'software' => [2,30,31],
                    'tv_equipments' => [1,2,4,5],
                    'video_game_consoles' => [1,4,5],
                    'video_games' => [32,30,33,34,2,],
                ],
                'Type'=> [],
                'Brand'=> [],
                'Model'=> [],
                'Condition'=> ['New','Used','Refurbished','For Parts/Not Working'],
                'Used State'=> [],//5
                'RAM (GB)'=> [],
                'Storage Capacity (GB)'=> [],
                'Storage Type'=> [],
                'Screen Size (inches)'=> [],
                'Color'=> [],//10
                'Operating System'=> [],
                'Display Technology'=> [],
                'Resolution'=> [],
                'Video Inputs'=> [],
                'Refresh Rate (Hz)'=> [],//15
                'Display Type'=> [],
                'Form Factor'=> [],
                'Aspect Ratio'=> [],
                'Connectivity'=> [],
                'Connecting Interface'=> [],//20
                'Resistance (Ohm)'=> [],
                'Subtype'=> [],
                'Processor'=> [],
                'Num of Cores'=> [],
                'Graphic Card'=> [],//25
                'Graphic Card Memory'=> [],
                'Num of LAN Ports'=> [],
                'Max Speed'=> [],
                'Location'=> [],
                'Platform'=> [],//30
                'Format'=> [],
                'Genre'=> [],
                'Rating'=> [],
                'Release Year'=> [],
                'Exchange Possible'=> ['Yes','No'],//35
                'table_model'=>'Electronic',
            ];
            $vehicles = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'buses_&_minibuses' => [2,11,19,10,7,8,9,10,13],
                    'cars' => [2,11,4,5,6,7,14],
                    'heavy_equipments' => [1,15,16],
                    'motorcycles_&_scooters' => [17,19],
                    'trucks_&_trailers' => [17,19],
                    'vehicle_parts_&_accessories' => [17,19],
                    'watercraft_&_boats' => [17,19],
                ],
                'Body' => [],
                'Brand' => [],
                'Color' => [],
                'Condition' => [],
                'Drivetrain' => [],//5
                'Engine Size (L)' => [],
                'Exchange Possible'=> ['Yes','No'],
                'Fuel' => [],
                'Horse Power (hp)' => [],
                'Mileage (km)' => [],//10
                'Model' => [],
                'Numb of Cylinders' => [],
                'Registered' => ['Yes','No'],
                'Seats' => [],
                'Transmission' => [],//15
                'Trim' => [],
                'Used State' => [],
                'VIN Number' => [],
                'Year of Manufacture' => [],
                'Type' => [],//20
                'table_model'=>'Vehicle',
            ];
            $properties = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'houses_&_apartments_for_rent' => [1,2,3,4,5,6,7,10,11,12,13,14],
                    'houses_&_apartments_for_sale' => [1,2,3,4,5,6,7,9,10,14],
                    'land_&_plots_for_rent' => [1,2,9,14],
                    'land_&_plots_for_sale' => [1,2,9,14],
                    'commercial_property_for_rent' => [1,2,6,7,8,9,14,15],
                    'commercial_property_for_sale' => [1,2,6,7,8,9,14,15],
                    'event_centers_&_venues' => [1,2,16,17,14],
                    'short_let' => [1,2,3,4,5,6,7,10,11,12,13,14],
                ],
                'Address' => [],
                'Property Type' => [],
                'Total Rooms' => [],
                'Bedrooms' => [],
                'Bathrooms' => [],//5
                'Furnishing' => [],
                'Parking Space' => ['Yes:1','No:0'],
                'Parking Space Size' => [],
                'Square Meters (sqm)' => [],
                'Housing Quality' => [],//10
                'Pets' => ['Yes:1','No:0'],
                'Smoking' => ['Yes:1','No:0'],
                'Parties' => ['Yes:1','No:0'],
                'Broker Fee' => ['Yes:1','No:0'],
                'Minimum Rent Time (days)' => [],//15
                'Guests Capacity' => [],
                'Facilities' => [],
                'table_model'=>'Properties',
            ];
            $agriculture_food = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'farm_machinery_&_equipment' => [],
                    'feeds_supplements_&_seeds' => [],
                    'livestock_&_poultry' => [1,3],
                    'meals_&_drinks' => [1,2],
                ],
                'Type' => [],
                'Subtype' => [],
                'Quantity' => [],
                'table_model'=>'Agriculture_food',
            ];
            $home_appliances = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'furniture' => [1,2,3,4],
                    'garden' => [1,4],
                    'home_accessories' => [1],
                    'kitchen_appliances' => [2],
                    'home_appliances' => [1,3],
                    'kitchen_&_dining' => [1],
                ],
                'Type' => [],
                'Room' => [],
                'Color' => [],
                'Condition' => [],
                'table_model'=>'Home_appliance',
            ];
            $health_beauty = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'bath_&_body' => [1],
                    'fragrance' => [2,3,4,5,6,7],
                    'hair_beauty' => [1,3],
                    'makeup' => [2,1,3,8,9],
                    'sexual_wellness' => [1],
                    'skin_care' => [2,1,10,11,12],
                    'tobacco_accessories' => [1],
                    'tools_&_accessories' => [1],
                    'vitamins_&_supplements' => [1,7,13,14],
                ],
                'Type' => [],
                'Gender' => [],
                'Brand' => [],
                'Perfume Type' => [],
                'Scent' => [],//5
                'Volume' => [],
                'Formulation' => [],
                'Color' => [],
                'Tone' => [],
                'Target Area' => [],//10
                'Skin Type' => [],
                'Benefits' => [],
                'Age Group' => [],
                'Package' => [],
                'table_model'=>'Home_appliance',
            ];
            $fashion = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'bags' => [2,1,3,4,5,6],
                    'clothing' => [2,1,3,8,5,7],
                    'clothing_accessories' => [2,1,3,5],
                    'jewelry' => [2,1,9,10,5],
                    'shoes' => [2,1,3,8,5,7,11,12,13],
                    'watches' => [2,3,14,15,16,17,18,19,7,20],
                    'wedding_wear' => [2],
                ],
                'Type' => [],
                'Gender' => [],
                'Brand' => [],
                'Material' => [],
                'Color' => [],//5
                'Closure' => [],
                'Style' => [],
                'Size' => [],
                'Main Material' => [],
                'Main Stone' => [],//10
                'Upper Material' => [],
                'Outsole Material' => [],
                'Fastening' => [],
                'Movement' => [],
                'Display' => [],//15
                'Case Material' => [],
                'Case Color' => [],
                'Band Material' => [],
                'Band Color' => [],
                'Features' => [],//20
                'table_model'=>'Fashion',
            ];
            $sports_arts_outdoors = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'arts_&_crafts' => [],
                    'books_&_games' => [1,2],
                    'camping_gear' => [1,4],
                    'cds_&_dvds' => [1],
                    'musical_instruments_&_gears' => [1,3,4],
                    'sports_equipment' => [1,4],
                ],
                'Type' => [],
                'Age Level' => [],
                'Subtype' => [],
                'Condition' => [],
                'table_model'=>'Sports_arts_outdoor',
            ];
            $need_employment = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'all' => [],
                ],
                'Years Of Experience' => [],
                'Job Type' => [],
                'Employment Status' => [],
                'Gender' => [],
                'Marital Status' => [],
                'Still Studying' => [],
                'Age' => [],
                'Previous Work Experience' => [],
                'Education' => [],
                'Certification' => [],
                'Highest Qualification' => [],
                'Skills' => [],
                'Languages' => [],
                'Expected Salary' => [],
                'table_model'=>'Need_employment',
            ];
            $vacancies = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'all' => [],
                ],
                'Company Name' => [],
                'Job Type' => [],
                'Min Years Of Experience' => [],
                'Career Level' => [],
                'Application Deadline' => [],
                'Responsibilities' => [],
                'Requirements And Skills' => [],
                'Minimum Qualification' => [],
                'Salary' => [],
                'table_model'=>'Vacancies',
            ];
            $services = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'all' => [],
                ],
                'Company Name' => [],
                'Service Type' => [],
                'table_model'=>'Fashion',
            ];
            $babies_kids = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'babies_&_kids_accessories' => [],
                    'baby_&_child_care' => [],
                    'children\'s_clothing' => [2,1,3,4,5],
                    'children\'s_furniture' => [1,4,6],
                    'children\'s_gear_&_safety' => [],
                    'children\'s_shoes' => [2,1,7,4,8,9,10],
                    'maternity_&_pregnancy' => [1],
                    'prams_&_strollers' => [3,1,4,12],
                    'toys' => [2,1,12],
                ],
                'Type' => [],
                'Gender' => [],
                'Brand' => [],
                'Color' => [],
                'Age Group' => [],//5
                'Condition' => [],
                'Size' => [],
                'Upper Material' => [],
                'Outsole Material' => [],
                'Fastening' => [],//10
                'Capacity' => [],
                'Age' => [],
                'table_model'=>'Babies_kid',
            ];
            $animals_pets = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'birds' => [2,1,5],
                    'cats_&_kittens' => [2,3,4,5],
                    'dogs_&_puppies' => [2,3,4,5],
                    'fish' => [],
                    'shoes' => [],
                    'pet\'s_accessories' => [1],
                    'reptiles' => [],
                    'other_animals' => [],
                ],
                'Type' => [],
                'Gender' => [],
                'Breed' => [],
                'Breed Type' => [],
                'Age' => [],//5
                'table_model'=>'Animals_pet',
            ];
            $commercial_equipment_tools = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'industrial_ovens' => [1,2,3,4,5,6,7,8,9],
                    'store_equipment' => [9],
                    'restaurant_&_catering_equipment' => [9,8],
                    'manufacturing_equipment' => [1,9],
                    'medical_equipment' => [1],
                    'safety_equipment' => [],
                    'printing_equipment' => [],
                    'salon_equipment' => [],
                    'stationery' => [],
                    'manufacturing_materials_&_tools' => [],
                    'stage_lighting_&_effects' => [],
                ],
                'Type' => [],
                'Power Source' => [],
                'Num Of Trays' => [],
                'Num Of Decks' => [],
                'Voltage' => [],//5
                'Max Temp' => [],
                'Shape' => [],
                'Weight' => [],
                'Condition' => [],
                'table_model'=>'Commercial_equipment_tool',
            ];
            $Repair_Construction = [
                'keys'=>[//this is for selecting form field relevant to a specific subcategory
                    'building_materials' => [1],
                    'doors' => [1,2,3,4,5],
                    'electrical_equipments' => [1,5],
                    'electrical_tools' => [1,5],
                    'hand_tools' => [1,5],
                    'measuring_&_layout_tools' => [1,5],
                    'plumbing_&_water_supply' => [1],
                    'solar_energy' => [1,5],
                    'windows' => [6,7,8,5],
                    'other_repair_&_construction_items' => [],
                ],
                'Type' => [],
                'Open Style' => [],
                'Color' => [],
                'Material' => [],
                'Condition' => [],//5
                'Type of Glass' => [],
                'Shape' => [],
                'Frame Material' => [],
                'table_model'=>'Repair_construction',
            ];
            $cat_class = new CatSvgClass();
            if($cat_class->isCategory($category)){//check if given category is really category
                //return $category;
                $category = str_replace('-','_',str_replace('_-','_',strtolower($category)));
                $sub_cat_list = $cat_class->sub_category_list;
                //walk thru the array and convert the elements to lower for ease of comparison
                array_walk($sub_cat_list, function(&$value){
                    $value = strtolower($value);
                });
                //check if subcategory is indeed valid one
                if(in_array(strtolower(str_replace('_',' ',$subcategory)),$sub_cat_list)) {
                    //get the keys of needed fields
                    $needed_fields_key = $$category['keys'][strtolower($subcategory)];
                    $needed_fields;
                    $x = 0;
                    foreach($$category as $key => $value){
                        if(in_array($x,$needed_fields_key)){
                            $needed_fields[$key] = $value;
                        }
                        $x++;
                    }
                    //get specific field options form key arr & overwrite general option
                    foreach($needed_fields_key as $key => $field){
                        if(is_array($field)){
                            foreach($field as $value){
                                $needed_fields[$key][] = $value;
                            }
                        }
                    }
                    $needed_fields['table_model'] = array_pop($$category);
                    return $needed_fields;
                }//end check on subcategory
                    return $$category;
            }//end if category
            else{
                return "This is not a category. How did you get here?";
            }
        }//end getFields
        public function formatFields($field_arr){
            $formatted_fields;
            foreach($field_arr as $field => $options){
                //check if field has (), get the str pos of ( and use it to extract the field name before it.
                //replace space with _ and convert to lower case to match what the database returns.
                $str_pos = strpos($field,'(')? strpos($field,'(')-1:strlen($field);
                $formatted_fields[$field] = strtolower(str_replace(' ','_',substr($field,0,$str_pos)));
            }
            return $formatted_fields;
        }
    }//end class
?>
