<?php
declare(strict_types=1);

$teamRoles = [
    ['id'=>'01','role'=>'Branch Coordinator','focus'=>'Office coordination and visitor assistance'],
    ['id'=>'02','role'=>'Travel Consultant','focus'=>'Trip discovery, budgets and route suggestions'],
    ['id'=>'03','role'=>'Rajasthan Tour Planner','focus'=>'Day-wise itineraries and sightseeing plans'],
    ['id'=>'04','role'=>'Booking Executive','focus'=>'Booking follow-up and confirmation support'],
    ['id'=>'05','role'=>'Guest Relations Executive','focus'=>'Traveller communication and trip support'],
    ['id'=>'06','role'=>'Transport Coordinator','focus'=>'Pickup, drop and vehicle coordination'],
    ['id'=>'07','role'=>'Hotel & Vendor Coordinator','focus'=>'Stay and local supplier coordination'],
    ['id'=>'08','role'=>'Local Experience Executive','focus'=>'Local activities and experience planning'],
    ['id'=>'09','role'=>'Field Operations Executive','focus'=>'On-ground trip and logistics assistance'],
    ['id'=>'10','role'=>'Customer Support Executive','focus'=>'Calls, WhatsApp queries and after-booking help'],
];

return [
    'agrawal-farm-mansarovar' => [
        'slug' => 'agrawal-farm-mansarovar',
        'name' => 'Swiggy Wala – Agrawal Farm, Mansarovar',
        'short_name' => 'Agrawal Farm, Mansarovar',
        'area' => 'Mansarovar Sector 11',
        'city' => 'Jaipur',
        'state' => 'Rajasthan',
        'postal_code' => '302020',
        'address' => 'Agrawal Farm, CBC 05, Vikramaditya Marg, Mansarovar Sector 11, Mansarovar, Jaipur, Rajasthan 302020',
        'maps_url' => 'https://maps.app.goo.gl/4QyxcxNaK8QMUzWF8',
        'headline' => 'Rajasthan tour planning support in Mansarovar, Jaipur.',
        'description' => 'Our Agrawal Farm location is a physical Swiggy Wala operating point for Rajasthan tour enquiries, custom itineraries, Jaipur sightseeing plans, family trips, group travel and transport coordination.',
        'local_copy' => 'Convenient for travellers and families around Mansarovar, Agrawal Farm, VT Road, Shipra Path and nearby South Jaipur neighbourhoods who prefer discussing their trip in person.',
        'services' => ['Custom Rajasthan tour packages','Jaipur sightseeing planning','Family and couple itineraries','Group and corporate travel','Airport and railway transfers','Car and tempo traveller coordination'],
        'team' => $teamRoles,
    ],
    'gopalpura-bypass' => [
        'slug' => 'gopalpura-bypass',
        'name' => 'Swiggy Wala – Gopalpura Bypass, Jaipur',
        'short_name' => 'Gopalpura Bypass',
        'area' => 'Triveni Nagar / Vishveshvariya Nagar',
        'city' => 'Jaipur',
        'state' => 'Rajasthan',
        'postal_code' => '302018',
        'address' => 'A-41 colony, Gopalpura Bypass Rd, Ashok Vihar Extension, Vishveshvariya Nagar, Triveni Nagar, Jaipur, Rajasthan 302018',
        'maps_url' => 'https://maps.app.goo.gl/tBo8JHFPTG7aLEcf9',
        'headline' => 'Local travel planning support near Gopalpura Bypass, Jaipur.',
        'description' => 'Our Gopalpura Bypass location is a physical Swiggy Wala operating point for Rajasthan holidays, Jaipur tours, custom trip planning, transport requirements and coordinated group travel.',
        'local_copy' => 'Useful for travellers around Gopalpura Bypass, Triveni Nagar, Vishveshvariya Nagar, Mahesh Nagar and nearby Jaipur areas who want an in-person discussion before confirming their trip.',
        'services' => ['Rajasthan holiday planning','Jaipur local and heritage tours','Golden Triangle itineraries','Outstation taxi coordination','Family and group packages','Custom day-wise travel plans'],
        'team' => $teamRoles,
    ],
];
