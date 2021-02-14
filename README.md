# Symfony XML😁 

This project contains 4 Rest-API endpoints as per the project requirements. 

## Requirements

Please make sure you have the following things are installed in your system.

```bash
 *PHP
 *Symfoney
 *Composer 
 *Postman or any api endpoint tester.
```

## Installation

Use the link to clone the project 💁 [click here.](https://github.com/Vibepasson123/siemensProject)

```bash
*Once Clone In your local repository.
*Open the terminal and go to the project folder in the terminal.
*Run the 'command' "Symfony server:start"
```
<<<<<<< HEAD
This will start your project on the server. If you click the link it will open the welcome page but as it API project, we need to test on either postman or any API testing tool.

=======
<img width="990" alt="Screenshot 2021-02-14 at 15 42 58" src="https://user-images.githubusercontent.com/33363433/107882061-3b80ef00-6edf-11eb-95ab-9c2a92ca710d.png">
>>>>>>> 3ad360b23760d5a5974bf47c9fa6e0e999bb93ad
## Usage

Get a List of users. 

### Api Endoints 
##### Method
```bash
   GET 
```
```bash
    http://127.0.0.1:8000/api/users
```
If you are running on a custom domain then 
##### Method
```bash
   GET 
```
```bash
   http://customeDomin.com/api/users

```
##### Api Response
```bash
{
    "statusCode": 200,
    "result": {
        "data": {
            "users": [
                {
                    "id": "1",
                    "name": "Jhon",
                    "email": "jhonsmith@gmail.com"
                },
                {
                    "id": "2",
                    "name": "Rose",
                    "email": "rosemarry@gmail.com"
                },
                {
                    "id": "3",
                    "name": "Jack",
                    "email": "jacksmit@gmail.com"
                }
                
            ]
        }
    }
}
```



Get user by Id.

##### Method
```bash
   GET 
```
```bash
    http://127.0.0.1:8000/api/user/id 'put your id as int' ex   http://127.0.0.1:8000/api/user/2 
```
##### Api Response

```bash
{
    "statusCode": 200,
    "result": {
        "data": [
            {
                "id": "2",
                "name": "Rose",
                "email": "rosemarry@gmail.com"
            }
        ]
    }
}
```

Create New User
##### Method
```bash
   POST
```
```bash
    http://127.0.0.1:8000/api/new
```
---
**NOTE**

For POST and PUT endpoints we have to make sure the request body is in JSON format and the request must have one header as "Content-Type" is set to application/JSON.
  If on postman then but the request body on raw as shown in the image and make a request.


---

<img width="990" alt="Screenshot 2021-02-14 at 15 42 58" src="https://user-images.githubusercontent.com/33363433/107882061-3b80ef00-6edf-11eb-95ab-9c2a92ca710d.png">

##### Request body
  ```bash
   {
    
	"name":"vivek",
	"email":"viveksah2sah@gmail.com"

	
   }
```

##### Response 
success

```bash
{
    "statusCode": 200,
    "result": {
        "data": [
            
            {
                "id": "1",
                "name": "vivek",
                "email": "viveksah2sah@gmail.com"
            }
        ]
    }
}
```
if User already exist 

```bash
{
    "statusCode": 409,
    "statusText": "User Alrady exsist",
    "data": [
        {
            "id": "5",
            "name": "vivek",
            "email": "viveksah2sah@gmail.com"
        }
    ]
}

```
If invalid json

```bash
{
    "statusCode": 400,
    "statusText": "Bad request. Please check your input data.",
    "requestBody": null
}
```
If invlaid E-mail

```bash
{
    "statusCode": 400,
    "statusText": "Bad request. Please check your input data.",
    "requestBody": {
        "name": "vivek",
        "email": "viveksah2sah@gmailcom"
    }
}
```


Edit User 

```bash
   PUT
```
```bash
    http://127.0.0.1:8000/api/edit/id
```
##### Request body
  ```bash
   {
    
	"name":"VibeVivek",
	"email":"viveksah3sah@gmail.com"

	
   }
```
##### Response 
success
```bash
{
    "statusCode": 200,
    "result": {
        "data": {
            "Old-Record": [
                {
                    "id": "2",
                    "name": "Vibe",
                    "email": "viveksah2sah@gmal3.com"
                }
            ],
            "New-Record": [
                {
                    "id": "2",
                    "name": "VibeVivek",
                    "email": "viveksah3sah@gmail.com"
                }
            ]
        }
    }
}

```
Error - User Not Found

```bash
{
    "statusCode": 404,
    "statusText": "User not found",
    "requestBody": {
        "name": "VibeVivek",
        "email": "viveksah3sah@gmail.com"
    }
}

```
Error -User Already exist with email
```bash
{
    "statusCode": 409,
    "statusText": "User Alrady exsist",
    "data": [
        {
            "id": "3",
            "name": "Jim",
            "email": "jim@gmail.com"
        }
    ]
}
```
Error - Invalid  Email


```bash

{
    "statusCode": 400,
    "statusText": "Bad request Please check input data",
    "requestBody": {
        "name": "VibeVivek",
        "email": "jim@gmailcom"
    }
}
```
Error -Invalid request body

```bash
{
    "statusCode": 400,
    "statusText": "Bad request Please check input data",
    "requestBody": null
}
```













## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate

## License
[MIT](https://choosealicense.com/licenses/mit/)
