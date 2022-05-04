from fileinput import filename
import json
import pandas as pd

filename = "澎湖縣r.json"
# print(filename[0:3])
with open(filename, 'r') as json_obj:
    json_data = json.load(json_obj)

store_lst = []
address_lst = []
inumber_lst = []
rating_lst = []
ranum_lst = []
website_lst = []

for k in range(len(json_data)):
    #定義變數
    store = json_data[k]['name']
    address = json_data[k]['formatted_address']
    inumber = json_data[k]['international_phone_number']
    rating = json_data[k]['rating']     
    rating_num = json_data[k]['user_ratings_total'] 
    web = json_data[k]['website']
    #新增到lst
    store_lst.append(store)
    address_lst.append(address)
    inumber_lst.append(inumber)
    rating_lst.append(rating)    
    ranum_lst.append(rating_num)
    website_lst.append(web)

info = [ store_lst, address_lst, inumber_lst, rating_lst, ranum_lst, website_lst]
df = pd.DataFrame(info)
country = filename[0:3]
df.to_csv(f"cleandata{country}.csv")
