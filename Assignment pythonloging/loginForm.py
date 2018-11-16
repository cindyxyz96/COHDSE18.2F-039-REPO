import pymongo
client = pymongo.Mongoclient("mongodb://127.0.0.1:27017")
db = client.customer
collection = db["users"]

    user = input("Enter user name: ")
    user_name = users.find({"user": username})
        if user_name == username:
            pwd = input("Enter password: ")
            user_pwd = users.find({"pwd": lahiru123})
                if pwd == user_pwd:
                    print('Loging success!')

    
