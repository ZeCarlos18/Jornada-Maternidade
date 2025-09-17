sequenceDiagram
    autonumber
    participant C as Client
    participant R as Route
    participant PostController as PostController
    participant Post as Post
    participant DB as Database
    
    C->>R: DELETE /resource/{id}
    R->>+PostController: destroy(id)
    PostController->>+Post: find(id)
    Post->>+DB: SELECT * FROM table WHERE id = ?
    DB-->>-Post: Return record
    Post-->>-PostController: Model instance
    PostController->>+Post: delete()
    Post->>+DB: DELETE FROM table WHERE id = ?
    DB-->>-Post: Success
    Post-->>-PostController: Success
    PostController-->>-R: Return JSON response
    R-->>C: 204 No Content
    
    Note over PostController,Post: This sequence removes a resource
  