from ast import keyword
import googlemaps
import json
import pprint
import time
import random
API_KEY = '金鑰'
gmaps = googlemaps.Client(key = API_KEY)

placeids = []
radius = 28000
cities = ["臺北市","新北市","桃園市","臺中市","臺南市","高雄市","基隆市","新竹市","嘉義市","新竹縣","苗栗縣","彰化縣","南投縣","雲林縣","嘉義縣","屏東縣","宜蘭縣","花蓮縣","臺東縣","澎湖縣"]

data = ['website', 'rating', 'user_ratings_total', 'name', 
 'international_phone_number', 'plus_code', 'formatted_address', 'place_id', 'business_status',
]

sleeptime=random.randint(0, 200)

#爬取有賣咖哩的餐廳
for city in cities:
    geocode_result = gmaps.geocode(city)
    loc = geocode_result[0]['geometry']['location'] 
    places_result  = gmaps.places_nearby(location= loc, radius = radius, open_now =False, keyword = "咖哩", type = 'restaurant')
    stored_results = []
    i = 0
    for place in places_result['results']:
        my_place_id = place['place_id']
        placeids.append(my_place_id)
        my_fields = data
        places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
        pprint.pprint(places_details['result'])
        stored_results.append(places_details['result'])
    time.sleep(3)
    try:
        luis  = gmaps.places_nearby(page_token = places_result['next_page_token'])
        for place in luis['results']:
            my_place_id = place['place_id']
            if my_place_id not in placeids:
                placeids.append(my_place_id)
                my_fields = data
                places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
                pprint.pprint(places_details['result'])
                stored_results.append(places_details['result'])
            else: 
                print('duplicated result')
        time.sleep(sleeptime)
        try:
            ze  = gmaps.places_nearby(page_token = luis['next_page_token'])
            for place in ze['results']:
                my_place_id = place['place_id']
                if my_place_id not in placeids:
                    placeids.append(my_place_id)
                    my_fields = data
                    places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
                    pprint.pprint(places_details['result'])
                    stored_results.append(places_details['result'])
                else: 
                    print('duplicated result')                
        except KeyError:
            print('erro aqui')
    except KeyError:
        print('erro aqui')
    print('primeiro passo')
    time.sleep(sleeptime)

    with open(f"restaurant{city}.json", 'w') as f:
        json.dump(stored_results, f)

#爬取有賣咖哩的咖啡廳
for city in cities:
    geocode_result = gmaps.geocode(city)
    loc = geocode_result[0]['geometry']['location'] 
    places_result  = gmaps.places_nearby(location= loc, radius = radius, open_now =False, keyword = "咖哩", type = 'cafe')
    stored_results = []
    i = 0
    for place in places_result['results']:
        my_place_id = place['place_id']
        placeids.append(my_place_id)
        my_fields = data
        places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
        pprint.pprint(places_details['result'])
        stored_results.append(places_details['result'])
    time.sleep(sleeptime)
    try:
        luis  = gmaps.places_nearby(page_token = places_result['next_page_token'])
        for place in luis['results']:
            my_place_id = place['place_id']
            if my_place_id not in placeids:
                placeids.append(my_place_id)
                my_fields = data
                places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
                pprint.pprint(places_details['result'])
                stored_results.append(places_details['result'])
            else: 
                print('duplicated result')
        time.sleep(sleeptime)
        try:
            ze  = gmaps.places_nearby(page_token = luis['next_page_token'])
            for place in ze['results']:
                my_place_id = place['place_id']
                if my_place_id not in placeids:
                    placeids.append(my_place_id)
                    my_fields = data
                    places_details  = gmaps.place(place_id= my_place_id , fields= my_fields)
                    pprint.pprint(places_details['result'])
                    stored_results.append(places_details['result'])
                else: 
                    print('duplicated result')                
        except KeyError:
            print('erro aqui')
    except KeyError:
        print('erro aqui')
    print('primeiro passo')
    time.sleep(sleeptime)

    with open(f"cafe{city}.json", 'w') as f:
        json.dump(stored_results, f)
