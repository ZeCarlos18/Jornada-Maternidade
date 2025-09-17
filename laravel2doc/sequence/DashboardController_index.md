sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant DashboardController as DashboardController
    participant Model as Model
    participant DB as Database
    
    C->>R: GET /resource
    R->>+DashboardController: index()
    DashboardController->>+Model: all() / get() / paginate()
    Model->>+DB: SELECT * FROM table
    DB-->>-Model: Return records
    Model-->>-DashboardController: Collection of models
    DashboardController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over DashboardController,Model: This sequence retrieves a list of resources
  