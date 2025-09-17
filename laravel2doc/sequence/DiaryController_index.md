sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant DiaryController as DiaryController
    participant Post as Post
    participant DB as Database
    
    C->>R: GET /resource
    R->>+DiaryController: index()
    DiaryController->>+Post: all() / get() / paginate()
    Post->>+DB: SELECT * FROM table
    DB-->>-Post: Return records
    Post-->>-DiaryController: Collection of models
    DiaryController-->>-R: Return JSON response
    R-->>C: 200 OK with data
    
    Note over DiaryController,Post: This sequence retrieves a list of resources
  