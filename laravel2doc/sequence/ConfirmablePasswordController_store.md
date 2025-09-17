sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant ConfirmablePasswordController as ConfirmablePasswordController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+ConfirmablePasswordController: store(request)
    ConfirmablePasswordController->>+V: validate(request)
    V-->>-ConfirmablePasswordController: validated data
    ConfirmablePasswordController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-ConfirmablePasswordController: New model instance
    ConfirmablePasswordController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over ConfirmablePasswordController,Model: This sequence creates a new resource
  