sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant AuthenticatedSessionController as AuthenticatedSessionController
    participant V as Validator
    participant Model as Model
    participant DB as Database
    
    C->>R: POST /resource
    R->>+AuthenticatedSessionController: store(request)
    AuthenticatedSessionController->>+V: validate(request)
    V-->>-AuthenticatedSessionController: validated data
    AuthenticatedSessionController->>+Model: create(data)
    Model->>+DB: INSERT INTO table
    DB-->>-Model: Return new record
    Model-->>-AuthenticatedSessionController: New model instance
    AuthenticatedSessionController-->>-R: Return JSON response
    R-->>C: 201 Created with data
    
    Note over AuthenticatedSessionController,Model: This sequence creates a new resource
  