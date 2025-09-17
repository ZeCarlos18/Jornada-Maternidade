sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant NewPasswordController as NewPasswordController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+NewPasswordController: store(request)
    NewPasswordController->>+V: validate(request)
    V-->>-NewPasswordController: validated data
    NewPasswordController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-NewPasswordController: New model instance
    NewPasswordController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over NewPasswordController,Model: This sequence creates a new resource
  