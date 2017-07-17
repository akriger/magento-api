## User address

<a name="create" />
### Add user address

** `POST`` / mobileapi / address / create` **

Add a user address with `cookies'.

** _ Paramers _ **

* `Null`
    
** _ Form _ **

* `Address_type`
* `Lastname`
* `Firstname`
* `Telephone`
* `Company`
* `Fax`
* `Postcode`
* `City`
* `Address1`
* `Address2`
* `Country_id`
* `State` - province

** _ examples _ **

`` `Js
/ Mobileapi / address / create
    Form: address_type = billing, shipping / / whether to set the default billing and default delivery address
               Lastname = leo
               Firstname = liew
               Telephone = 13631841987
               Company = kalengo
               Fax = 524521
               Postcode = 123456
               City = GuangZhou
               Address1 = Yiyuan
               Address2 = street10
               Country_id = US
               State = GUANGDONG
`` ``

** _ Response _ **

`` `Js
{
    "Code": 0,
    "Msg": "save or update user address success!",
    "Model": null
}
`` ``

---------------------------------------

<a name="update" />
### Update the user address

** `POST`` / mobileapi / address / create` **

Modify the user address, must bring `cookies`.

** _ Paramers _ **

* `Null`
    
** _ Form _ **

* `Address_type`
* `Lastname`
* `Firstname`
* `Telephone`
* `Company`
* `Fax`
* `Postcode`
* `City`
* `Address1`
* `Address2`
* `Country_id`
* `State` - province
* `Address_book_id` - the address id to be updated

** _ examples _ **

`` `Js
    / Mobileapi / address / create
        Form: address_type = billing, shipping / / whether to set the default billing and default delivery address
               Lastname = leo
               Firstname = liew
               Telephone = 13631841987
               Company = kalengo
               Fax = 524521
               Postcode = 123456
               City = GuangZhou
               Address1 = Yiyuan
               Address2 = street109
               Country_id = US
               State = GUANGDONG
               Address_book_id = 137
`` ``

** _ Response _ **

`` `Js
    {
        "Code": 0,
        "Msg": "save or update user address success!",
        "Model": null
    }
`` ``

---------------------------------------

<a name="getAddress" />
### Get the user's single address details

** `GET`` / mobileapi / address / getAddress` **

To get the user's single address details, bring `cookies`.

** _ Paramers _ **

* `Address_id` - user address ID

** _ examples _ **

`` `Js
    / Mobileapi / address / getAddress? Address_id = 106
`` ``

** _ Response _ **

`` `Js
    {
        Code: 0,
        Msg: "get user address success!",
        Model: {
            Entity_id: "106",
            Entity_type_id: "2",
            Name: "terry wei"
            Country: "AT",
            Attribute_set_id: "0",
            Parent_id: "137",
            Created_at: "2015-05-20T10: 34: 01-07: 00",
            Updated_at: "2015-05-20 02:34:01",
            Is_active: "1",
            Firstname: "terry",
            Lastname: "wei"
            Company: "kalengo",
            City: "guangzhou",
            Region: "Salzburg",
            Postcode: "002"
            Country_id: "AT",
            Telephone: "123222"
            Fax: "524521",
            Region_id: 98,
            Street: [
                "Xinhuajie"
            ],
            Customer_id: "137",
            Is_default_billing: true,
            Is_default_shipping: true
        }
    }
`` ``

---------------------------------------

<a name="delete" />
### Delete the user address

** `GET`` / mobileapi / address / delete` **

Delete the user address, call the interface must bring `cookies`.

** _ Paramers _ **

* `Address_id` - user address ID

** _ examples _ **

`` `Js
    / Mobileapi / address / delete? Address_id = 111
`` ``

** _ Response _ **

`` `Js
    {
        Code: 0,
        Msg: null,
        Model: true // deleted successfully
    }
`` ``

---------------------------------------

<a name="getAddressList" />
### Get the user address list

** `GET`` / mobileapi / address / getAddressList` **

To get a list of user addresses, bring `cookies`.

** _ Paramers _ **

* `Null`

** _ examples _ **

`` `Js
    / Mobileapi / address / getAddressList
`` ``

** _ Response _ **

`` `Js
{
    Code: 0,
    Msg: "get user address list success!",
    Model: [
        {
            Entity_id: "106",
            Entity_type_id: "2",
            Name: "terry wei"
            Country: "10",
            Attribute_set_id: "0",
            Parent_id: "137",
            Created_at: "2015-05-21 07:34:58",
            Updated_at: "2015-05-20 01:47:31"
            Is_active: "1",
            Firstname: "terry",
            Lastname: "wei"
            Company: "kalengo",
            City: "guangzhou",
            Region: "Armed Forces Middle East"
            Postcode: "002"
            Country_id: "10",
            Telephone: "123222"
            Fax: "524521",
            Region_id: 5,
            Street: [
                "Xinhuajie"
            ],
            Customer_id: "137"
        }
    ]
}
`` ``

---------------------------------------
