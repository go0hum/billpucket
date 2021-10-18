# Installation

- docker up -d
- php artisan migrate
- php artisan migrate:fresh --seed

```
URl: http://localhost/api/v1/auth/login
Type: POST
Request:
{
    "username" : "Humberto",
    "password" : "test"
}

URl: http://localhost/api/v1/auth/logout
Type: POST
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY

URl: http://localhost/api/v1/auth/user
Type: GET
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY

URl: http://localhost/api/v1/auth/transacciones
Type: GET
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY

URl: http://localhost/api/v1/auth/persona
Type: POST
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY
Request:
{
    "nombre" : "Humberto",
    "apellidos" : "Santos Huan",
    "telefono" : "3327208707",
    "curp": "SAHHH860328",
    "direccion": "calle conocida, fresnos, jalisco"
}

URl: http://localhost/api/v1/auth/persona
Type: PUT
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY
Request:
{
    "telefono" : "3327208707",
    "direccion": "calle conocida, fresnos, jalisco"
}

URl: http://localhost/api/v1/auth/exist
Type: PUT
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY
Request:
{
    "id" : 1,
    "persona_id" : 1
}

URl: http://localhost/api/v1/auth/transacciones
Type: GET
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY


URl: http://localhost/api/v1/auth/user
Type: POST
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY
Request:
{
    "username" : "Pedro",
    "password" : "test",
    "persona_id" : 1
}


URl: http://localhost/api/v1/auth/down
Type: POST
HEADER: Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvdjFcL2F1dGhcL2xvZ2luIiwiaWF0IjoxNjM0NTYxNTg1LCJleHAiOjE2MzQ1NjUxODUsIm5iZiI6MTYzNDU2MTU4NSwianRpIjoidzB5SkFYNERGUGIwT1pXZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.twWm3mBMGZvsxwwceGFesxak7h7BERmu_Mc6pnzXlZY
Request:
{
    "id" : 1
}
```
