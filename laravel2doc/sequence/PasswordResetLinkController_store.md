sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant PasswordResetLinkController as PasswordResetLinkController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+PasswordResetLinkController: store(request)
    PasswordResetLinkController->>+V: validate(request)
    V-->>-PasswordResetLinkController: validated data
    PasswordResetLinkController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-PasswordResetLinkController: New model instance
    PasswordResetLinkController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over PasswordResetLinkController,Model: This sequence creates a new resource
  