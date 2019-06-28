
## REST APIs
### [ /category](#category)
|  					|          	|					|
| ------------- 			| ------------	| -----------------------------------	|
|- Criar categoria   			| `POST`	|[/category](#post-category)		|
|- Listar todas categorias   		| `GET`		|[/category](#get-category)		|
|- Exibir uma categoria especifica   	| `GET`    	|[/category/{id}](#get-categoryid)   	|
|- Atualiar uma categoria   		| `PUT`    	|[/category/{id}](#put-categoryid)	|
|- Remover uma categoria   		| `DELETE`   	|[/category/{id}](#delete-categoryid)	|

### [ /product](#product)
|  					|          	|					|
| ------------- 			| ------------	| -----------------------------------	|
|- Criar produto   			| `POST`	|[/product](#post-product)		|
|- Listar todos produtos   		| `GET`		|[/product](#get-product)		|
|- Exibir um produto especifico   	| `GET`    	|[/product/{id}](#get-productid)   	|
|- Atualiar um produto   		| `PUT`    	|[/product/{id}](#put-productid)	|
|- Remover um produto   		| `DELETE`   	|[/product/{id}](#delete-productid)	|

### [ /flavor](#flavor)
|  					|          	|					|
| ------------- 			| ------------	| -----------------------------------	|
|- Criar sabor   			| `POST`	|[/flavor](#post-flavor)		|
|- Listar todos sabores   		| `GET`		|[/flavor](#get-flavor)			|
|- Exibir um sabor especifico   	| `GET`    	|[/flavor/{id}](#get-flavorid)   	|
|- Atualiar um sabor    		| `PUT`    	|[/flavor/{id}](#put-flavorid)		|
|- Remover um sabor 	   		| `DELETE`   	|[/flavor/{id}](#delete-flavorid)	|

### [ /client](#client)
|  					|          	|					|
| ------------- 			| ------------	| -----------------------------------	|
|- Criar cliente   			| `POST`	|[/client](#post-client)		|
|- Listar todos clientes   		| `GET`		|[/client](#get-client)			|
|- Exibir um cliente especifico   	| `GET`    	|[/client/{telephone}](#get-clientid)   |
|- Atualiar um cliente    		| `PUT`    	|[/client/{telephone}](#put-clientid)	|
|- Remover um cliente 	   		| `DELETE`   	|[/client/{telephone}](#delete-clientid)|

### [ /order](#client)
|  					|          	|					|
| ------------- 			| ------------	| -----------------------------------	|
|- Criar pedido   			| `POST`	|[/order](#post-order)			|
|- Listar todos pedidos   		| `GET`		|[/order](#get-order)			|
|- Exibir um pedido especifico   	| `GET`    	|[/order/{id}](#get-orderid)   		|
|- Remover um pedido 	   		| `DELETE`   	|[/order/{id}](#delete-orderid)		|

## Request & Response Examples

### /category

### POST /category

- Criar categoria

	- Example: http://localhost:8000/api/category



Request:

    {
        "name" : "Pizza"
    }

### GET /category

- Listar todas categorias

	- Example: http://localhost:8000/api/category

Response:

	[  
	   {  
	      "id":1,
	      "name":"Pizza",
	      "created_at":"2019-06-27 18:31:00",
	      "updated_at":"2019-06-27 18:31:00"
	   },
	   {  
	      "id":2,
	      "name":"Bebidas",
	      "created_at":"2019-06-27 19:51:10",
	      "updated_at":"2019-06-27 19:51:10"
	   }
	]



### GET /category/id

- Exibir uma categoria especifica

	- Example: http://localhost:8000/api/category/2

Response:

	{  
	   "id":2,
	   "name":"Bebidas",
	   "created_at":"2019-06-27 19:51:10",
	   "updated_at":"2019-06-27 19:51:10"
	}

### PUT /category/id

- Atualizar uma categoria
	
	- Example: http://localhost:8000/api/category/2

Response:

	{  
	   "name":"Bebidas"
	}

### DELETE /category/id

- Remover uma categoria

	- Example: http://localhost:8000/api/category/2

Response:

	status code 200


### /product

### POST /product

- Criar produto

	- Example: http://localhost:8000/api/product



Request:

	 {  
	   "name":"Pizza Grande",
	   "price":19.99,
	   "category_id":1
	}

### GET /product

- Listar todos produtos

	- Example: http://localhost:8000/api/product

Response:

	[
	  {
	    "id": 1,
	    "name": "Pizza Grande",
	    "price": 19.99,
	    "category_id": 1,
	    "created_at": "2019-06-28 00:17:52",
	    "updated_at": "2019-06-28 00:17:52",
	    "flavor": [
	      {
		"id": 1,
		"name": "mussarela",
		"category_id": 1,
		"created_at": "2019-06-27 19:37:22",
		"updated_at": "2019-06-27 19:37:22"
	      },
	      {
		"id": 2,
		"name": "napolitana",
		"category_id": 1,
		"created_at": "2019-06-27 20:37:35",
		"updated_at": "2019-06-27 20:37:39"
	      },
	      {
		"id": 3,
		"name": "portuguesa",
		"category_id": 1,
		"created_at": "2019-06-27 20:37:50",
		"updated_at": "2019-06-27 21:37:50"
	      }
	    ],
	    "category": {
	      "id": 1,
	      "name": "Pizza",
	      "created_at": "2019-06-27 18:31:00",
	      "updated_at": "2019-06-27 18:31:00"
	    }
	  },
	  {
	    "id": 2,
	    "name": "Pizza Media",
	    "price": 15.99,
	    "category_id": 1,
	    "created_at": "2019-06-28 00:21:02",
	    "updated_at": "2019-06-28 00:21:02",
	    "flavor": [
	      {
		"id": 1,
		"name": "mussarela",
		"category_id": 1,
		"created_at": "2019-06-27 19:37:22",
		"updated_at": "2019-06-27 19:37:22"
	      },
	      {
		"id": 2,
		"name": "napolitana",
		"category_id": 1,
		"created_at": "2019-06-27 20:37:35",
		"updated_at": "2019-06-27 20:37:39"
	      },
	      {
		"id": 3,
		"name": "portuguesa",
		"category_id": 1,
		"created_at": "2019-06-27 20:37:50",
		"updated_at": "2019-06-27 21:37:50"
	      }
	    ],
	    "category": {
	      "id": 1,
	      "name": "Pizza",
	      "created_at": "2019-06-27 18:31:00",
	      "updated_at": "2019-06-27 18:31:00"
	    }
	  },
	  {
	    "id": 4,
	    "name": "Coca Cola 2L",
	    "price": 9.99,
	    "category_id": 2,
	    "created_at": "2019-06-28 00:23:37",
	    "updated_at": "2019-06-28 00:23:37",
	    "flavor": [],
	    "category": {
	      "id": 2,
	      "name": "Bebida",
	      "created_at": "2019-06-28 00:22:16",
	      "updated_at": "2019-06-28 00:22:16"
	    }
	  }
	]



### GET /product/id

- Exibir um produto especifico

	- Example: http://localhost:8000/api/product/2

Response:

	{
	  "id": 2,
	  "name": "Pizza Media",
	  "price": 15.99,
	  "category_id": 1,
	  "created_at": "2019-06-28 00:21:02",
	  "updated_at": "2019-06-28 00:21:02",
	  "category": {
	    "id": 1,
	    "name": "Pizza",
	    "created_at": "2019-06-27 18:31:00",
	    "updated_at": "2019-06-27 18:31:00"
	  },
	  "flavor": [
	    {
	      "id": 1,
	      "name": "mussarela",
	      "category_id": 1,
	      "created_at": "2019-06-27 19:37:22",
	      "updated_at": "2019-06-27 19:37:22"
	    },
	    {
	      "id": 2,
	      "name": "napolitana",
	      "category_id": 1,
	      "created_at": "2019-06-27 20:37:35",
	      "updated_at": "2019-06-27 20:37:39"
	    },
	    {
	      "id": 3,
	      "name": "portuguesa",
	      "category_id": 1,
	      "created_at": "2019-06-27 20:37:50",
	      "updated_at": "2019-06-27 21:37:50"
	    }
	  ]
	}
### PUT /product/id

- Atualizar um produto
	
	- Example: http://localhost:8000/api/product/1

Response:

	{  
	   "price":29.99
	}


### DELETE /product/id

- Remover um produto

	- Example: http://localhost:8000/api/product/1

Response:

	status code 200

### /flavor

### POST /flavor

- Criar sabor

	- Example: http://localhost:8000/api/flavor



Request:

 	{  
	   "name":"mussarela",
	   "category_id":1
	}

### GET /flavor

- Listar todos sabores

	- Example: http://localhost:8000/api/flavor

Response:

	[
	  {
	    "id": 1,
	    "name": "mussarela",
	    "category_id": 1,
	    "created_at": "2019-06-27 19:37:22",
	    "updated_at": "2019-06-27 19:37:22"
	  },
	  {
	    "id": 2,
	    "name": "napolitana",
	    "category_id": 1,
	    "created_at": "2019-06-27 20:37:35",
	    "updated_at": "2019-06-27 20:37:39"
	  },
	  {
	    "id": 3,
	    "name": "portuguesa",
	    "category_id": 1,
	    "created_at": "2019-06-27 20:37:50",
	    "updated_at": "2019-06-27 21:37:50"
	  }
	]


### GET /flavor/id

- Exibir um sabor especifico

	- Example: http://localhost:8000/api/flavor/2

Response:

	{
	  "id": 2,
	  "name": "napolitana",
	  "category_id": 1,
	  "created_at": "2019-06-27 20:37:35",
	  "updated_at": "2019-06-27 20:37:39"
	}
	
### PUT /flavor/id

- Atualizar um sabor
	
	- Example: http://localhost:8000/api/flavor/2

Response:

	{  
	   "name":"mussarela ouro"
	}


### DELETE /flavor/id

- Remover um sabor

	- Example: http://localhost:8000/api/flavor/1

Response:

	status code 200

### /client

### POST /client

- Criar

	- Example: http://localhost:8000/api/client



Request:

	 {  
	   "name":"Anthony Edward Stark Jr.",
	   "telephone":31994726273
	}

### GET /client

- Listar todos

	- Example: http://localhost:8000/api/client

Response:

	[
	  {
	    "telephone": 31994726273,
	    "name": "Anthony Edward Stark Jr.",
	    "created_at": "2019-06-28 01:33:13",
	    "updated_at": "2019-06-28 01:33:13"
	  },
	  {
	    "telephone": 99314726273,
	    "name": "Wade Winston Wilson",
	    "created_at": "2019-06-28 01:36:11",
	    "updated_at": "2019-06-28 01:36:11"
	  }
	]

### GET /client/telephone

- Exibir

	- Example: http://localhost:8000/api/client/31994726273

Response:

	{
	  "telephone": 31994726273,
	  "name": "Anthony Edward Stark Jr.",
	  "created_at": "2019-06-28 01:33:13",
	  "updated_at": "2019-06-28 01:33:13"
	}
	
### PUT /client/telephone

- Atualizar
	
	- Example: http://localhost:8000/api/client/31994726273

Response:

	{  
	   "name":"Tony Stark"
	}


### DELETE /client/telephone

- Remover

	- Example: http://localhost:8000/api/client/31994726273

Response:

	status code 200

### /order

### POST /order

- Criar

	- Example: http://localhost:8000/api/order



Request:

	 {  
	   "client_telephone":"99314726273",
	   "addresses":"10880, Malibu Point, 90265, Malibu , LA , Califórnia",
	   "items":[  
	      {  
		 "product_id":1,
		 "quantity":1,
		 "flavors_id":1
	      },
	      {  
		 "product_id":1,
		 "quantity":1,
		 "flavors_id":3
	      },
	      {  
		 "product_id":4,
		 "quantity":1
	      }
	   ]
	}
### GET /order

- Listar todos

	- Example: http://localhost:8000/api/order

Response:

	[	 
	  {
	    "id": 1,
	    "client_telephone": 31994726273,
	    "addresses": "10880, Malibu Point, 90265, Malibu , LA , Califórnia",
	    "total_price": 30,
	    "created_at": "2019-06-28 02:05:27",
	    "updated_at": "2019-06-28 02:05:27"
	  },
	  {
	    "id": 2,
	    "client_telephone": 99314726273,
	    "addresses": "200 Park Avenue, Manhattan , NY,
	    "total_price": 40,
	    "created_at": "2019-06-28 02:09:27",
	    "updated_at": "2019-06-28 02:09:27"
	  },
	]

### GET /order/id

- Exibir

	- Example: http://localhost:8000/api/order/1

Response:

	{
	  "order_id": 1,
	  "client_id": 99314726273,
	  "total_price": 30,
	  "items": [
	    {
	      "name": "Pizza Grande",
	      "flavor": "mussarela",
	      "price": 10,
	      "quantity": 1
	    },
	    {
	      "name": "Pizza Grande",
	      "flavor": "portuguesa",
	      "price": 10,
	      "quantity": 1
	    },
	    {
	      "name": "Coca Cola 2L",
	      "flavor": null,
	      "price": 10,
	      "quantity": 1
	    }
	  ]
	}

### DELETE /order/id

- Remover

	- Example: http://localhost:8000/api/order/id

Response:

	status code 200
