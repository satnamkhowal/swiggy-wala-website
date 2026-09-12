<?php
declare(strict_types=1);

function blog_destinations(): array {
    return [
        'udaipur'=>['Udaipur','City of Lakes','City Palace, Lake Pichola and Sajjangarh'],
        'jaipur'=>['Jaipur','Pink City','Amber Fort, City Palace and local bazaars'],
        'jodhpur'=>['Jodhpur','Blue City','Mehrangarh Fort, Jaswant Thada and old-city lanes'],
        'jaisalmer'=>['Jaisalmer','Golden City','Jaisalmer Fort, havelis and desert experiences'],
        'pushkar'=>['Pushkar','Sacred Lake Town','Pushkar Lake, Brahma Temple and market lanes'],
        'mount-abu'=>['Mount Abu','Rajasthan Hill Station','Dilwara Temples, Nakki Lake and viewpoints'],
        'ajmer'=>['Ajmer','Pilgrimage City','Ajmer Sharif, Ana Sagar and nearby Pushkar'],
        'bikaner'=>['Bikaner','Desert Heritage City','Junagarh Fort, old havelis and local food'],
        'chittorgarh'=>['Chittorgarh','Fort City','Chittorgarh Fort, towers and palace ruins'],
        'kumbhalgarh'=>['Kumbhalgarh','Aravalli Fort Escape','Kumbhalgarh Fort, viewpoints and nearby villages'],
        'ranakpur'=>['Ranakpur','Temple Valley','Ranakpur Jain Temple and Aravalli countryside'],
        'alwar'=>['Alwar','Gateway to Rajasthan','Bala Quila, City Palace and nearby lakes'],
        'bharatpur'=>['Bharatpur','Birding Gateway','Keoladeo National Park and heritage sites'],
        'bundi'=>['Bundi','Stepwell City','Taragarh Fort, Bundi Palace and stepwells'],
        'kota'=>['Kota','Chambal City','riverfront sights, gardens and nearby heritage'],
        'neemrana'=>['Neemrana','Heritage Weekend Escape','fort stays and Aravalli landscapes'],
        'sawai-madhopur'=>['Sawai Madhopur','Ranthambore Gateway','Ranthambore safaris, fort and local nature'],
        'nathdwara'=>['Nathdwara','Temple Town','Shrinathji Temple, local art and nearby Eklingji'],
        'mandawa'=>['Mandawa','Shekhawati Open-Air Gallery','painted havelis and heritage lanes'],
        'osian'=>['Osian','Desert Temple Town','ancient temples, dunes and village landscapes'],
        'delhi'=>['Delhi','Capital Gateway','Old Delhi, New Delhi landmarks and Rajasthan connections'],
        'agra'=>['Agra','Taj City','Taj Mahal, Agra Fort and Rajasthan routes'],
        'rishikesh'=>['Rishikesh','Yoga Capital','Ganga ghats, ashrams and outdoor experiences'],
        'varanasi'=>['Varanasi','Ancient Spiritual City','Ganga ghats, old lanes and cultural rituals'],
        'amritsar'=>['Amritsar','Golden Temple City','Golden Temple, heritage streets and Punjabi food'],
        'shimla'=>['Shimla','Himalayan Hill City','Mall Road, viewpoints and colonial heritage'],
        'manali'=>['Manali','Mountain Holiday Town','valleys, mountain drives and local temples'],
        'goa'=>['Goa','Coastal Escape','beaches, heritage quarters and local cuisine'],
        'mumbai'=>['Mumbai','Maximum City','waterfront landmarks, markets and cultural districts'],
        'ahmedabad'=>['Ahmedabad','Heritage City','old-city walks, museums and stepwells'],
        'indore'=>['Indore','Food Capital of Madhya Pradesh','markets, palaces and regional food'],
        'khajuraho'=>['Khajuraho','Temple Heritage Town','UNESCO temples and nearby nature'],
        'orchha'=>['Orchha','Riverside Heritage Town','palaces, cenotaphs and Betwa river views'],
        'lucknow'=>['Lucknow','City of Nawabs','imambaras, heritage walks and Awadhi cuisine'],
        'haridwar'=>['Haridwar','Ganga Pilgrimage City','Har Ki Pauri, temples and nearby Rishikesh'],
        'mussoorie'=>['Mussoorie','Queen of the Hills','Mall Road, waterfalls and Himalayan viewpoints'],
        'nainital'=>['Nainital','Lake District','Naini Lake, viewpoints and Kumaon excursions'],
        'ranthambore'=>['Ranthambore','Wildlife Destination','responsible safaris, fort and nature zones'],
        'sariska'=>['Sariska','Aravalli Wildlife Escape','responsible safaris and nearby Alwar heritage'],
        'rajasthan'=>['Rajasthan','Land of Kings','forts, palaces, lakes, deserts and cultural routes']
    ];
}

function blog_topics(): array {
    return [
        'travel-guide'=>['Complete Travel Guide','travel guide','first-time planning'],
        'two-day-itinerary'=>['2-Day Itinerary','2 day itinerary','a short weekend'],
        'three-day-itinerary'=>['3-Day Itinerary','3 day itinerary','a balanced city break'],
        'four-day-itinerary'=>['4-Day Itinerary','4 day itinerary','a relaxed holiday'],
        'five-day-itinerary'=>['5-Day Itinerary','5 day itinerary','an in-depth trip'],
        'best-places-to-visit'=>['Best Places to Visit','best places to visit','essential sightseeing'],
        'best-time-to-visit'=>['Best Time to Visit','best time to visit','weather and seasons'],
        'trip-cost'=>['Trip Cost and Budget Guide','trip cost','budget planning'],
        'family-trip'=>['Family Trip Guide','family trip','a comfortable family holiday'],
        'honeymoon-guide'=>['Honeymoon Guide','honeymoon','a romantic couple trip'],
        'solo-travel-guide'=>['Solo Travel Guide','solo travel','a safer independent journey'],
        'weekend-trip'=>['Weekend Trip Plan','weekend trip','a quick escape'],
        'road-trip-guide'=>['Road Trip Guide','road trip','a practical driving route'],
        'food-guide'=>['Local Food Guide','local food','regional flavours and trusted dining'],
        'shopping-guide'=>['Shopping Guide','shopping','markets, crafts and souvenirs'],
        'hotel-area-guide'=>['Where to Stay','best areas to stay','choosing the right neighbourhood'],
        'photography-guide'=>['Photography Guide','photography spots','responsible travel photography'],
        'heritage-tour'=>['Heritage Tour Guide','heritage tour','history and architecture'],
        'luxury-trip'=>['Luxury Trip Guide','luxury trip','premium stays and private experiences'],
        'budget-trip'=>['Budget Trip Guide','budget trip','value-focused travel'],
        'monsoon-trip'=>['Monsoon Travel Guide','monsoon trip','rainy-season landscapes'],
        'winter-trip'=>['Winter Travel Guide','winter trip','cool-weather sightseeing'],
        'summer-trip'=>['Summer Travel Guide','summer trip','heat-smart planning'],
        'couple-trip'=>['Couple Trip Guide','couple trip','an unhurried getaway'],
        'tour-package-guide'=>['Tour Package Planning Guide','tour package','comparing inclusions and routes']
    ];
}

function all_programmatic_blogs(): array {
    $rows=[];
    foreach(blog_destinations() as $dslug=>$d){
        foreach(blog_topics() as $tslug=>$t){
            $slug=$dslug.'-'.$tslug;
            $rows[$slug]=['slug'=>$slug,'destination'=>$d[0],'nickname'=>$d[1],'highlights'=>$d[2],'topic'=>$t[0],'keyword'=>$d[0].' '.$t[1],'intent'=>$t[2],'image'=>'/blogs/images/'.$dslug.'.webp'];
        }
    }
    return $rows;
}

function get_programmatic_blog(string $slug): ?array {
    $parts=explode('-', $slug);
    foreach(blog_destinations() as $dslug=>$d){
        if(str_starts_with($slug,$dslug.'-')){
            $tslug=substr($slug,strlen($dslug)+1); $topics=blog_topics();
            if(!isset($topics[$tslug])) return null;
            $t=$topics[$tslug];
            return ['slug'=>$slug,'destination'=>$d[0],'nickname'=>$d[1],'highlights'=>$d[2],'topic'=>$t[0],'keyword'=>$d[0].' '.$t[1],'intent'=>$t[2],'image'=>'/blogs/images/'.$dslug.'.webp'];
        }
    }
    return null;
}
