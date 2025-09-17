# API Documentation

## Project: laravel/laravel

Laravel Version: v11.46.0

Generated: 16/09/2025, 23:48:07

## Table of Contents

- [auth](#auth)
- [web](#web)

## auth

| Method | Endpoint | Handler | Description |
|--------|----------|---------|-------------|
| GET | register | RegisteredUserController::class, 'create' | List register |
| POST | register | RegisteredUserController::class, 'store' | Create a new register |
| GET | login | AuthenticatedSessionController::class, 'create' | List login |
| POST | login | AuthenticatedSessionController::class, 'store' | Create a new login |
| GET | forgot-password | PasswordResetLinkController::class, 'create' | List forgot-password |
| POST | forgot-password | PasswordResetLinkController::class, 'store' | Create a new forgot-password |
| GET | reset-password/{token} | NewPasswordController::class, 'create' | Retrieve a specific {token} |
| POST | reset-password | NewPasswordController::class, 'store' | Create a new reset-password |
| GET | verify-email | EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1' | List verify-email |
| POST | email/verification-notification | EmailVerificationNotificationController::class, 'store' | Create a new verification-notification |
| GET | confirm-password | ConfirmablePasswordController::class, 'show' | List confirm-password |
| POST | confirm-password | ConfirmablePasswordController::class, 'store' | Create a new confirm-password |
| PUT | password | PasswordController::class, 'update' | Update a specific password |
| POST | logout | AuthenticatedSessionController::class, 'destroy' | Create a new logout |

### GET register

**Handler:** RegisteredUserController::class, 'create'

**Description:** List register

---

### POST register

**Handler:** RegisteredUserController::class, 'store'

**Description:** Create a new register

---

### GET login

**Handler:** AuthenticatedSessionController::class, 'create'

**Description:** List login

---

### POST login

**Handler:** AuthenticatedSessionController::class, 'store'

**Description:** Create a new login

---

### GET forgot-password

**Handler:** PasswordResetLinkController::class, 'create'

**Description:** List forgot-password

---

### POST forgot-password

**Handler:** PasswordResetLinkController::class, 'store'

**Description:** Create a new forgot-password

---

### GET reset-password/{token}

**Handler:** NewPasswordController::class, 'create'

**Description:** Retrieve a specific {token}

---

### POST reset-password

**Handler:** NewPasswordController::class, 'store'

**Description:** Create a new reset-password

---

### GET verify-email

**Handler:** EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'

**Description:** List verify-email

---

### POST email/verification-notification

**Handler:** EmailVerificationNotificationController::class, 'store'

**Description:** Create a new verification-notification

---

### GET confirm-password

**Handler:** ConfirmablePasswordController::class, 'show'

**Description:** List confirm-password

---

### POST confirm-password

**Handler:** ConfirmablePasswordController::class, 'store'

**Description:** Create a new confirm-password

---

### PUT password

**Handler:** PasswordController::class, 'update'

**Description:** Update a specific password

---

### POST logout

**Handler:** AuthenticatedSessionController::class, 'destroy'

**Description:** Create a new logout

---

## web

| Method | Endpoint | Handler | Description |
|--------|----------|---------|-------------|
| GET | /auth/facebook | SocialAuthController::class, 'redirectToFacebook' | List facebook |
| GET | /auth/facebook/callback | SocialAuthController::class, 'handleFacebookCallback' | List callback |
| GET | /auth/google | function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();
    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail() | List google |
| GET | / | function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', [DashboardController::class, 'index' | List resource |
| GET | /diary | DiaryController::class, 'index' | List diary |
| GET | /posts/create/{category?} | PostController::class, 'create' | Retrieve a specific {category?} |
| POST | /posts | PostController::class, 'store' | Create a new posts |
| GET | /community/{category?} | CommunityController::class, 'index' | Retrieve a specific {category?} |
| GET | /profile | ProfileController::class, 'edit' | List profile |
| PATCH | /profile | ProfileController::class, 'update' | Update a specific profile |
| DELETE | /profile | ProfileController::class, 'destroy' | Delete a specific profile |
| POST | /profile/photo | ProfileController::class, 'updatePhoto' | Create a new photo |
| DELETE | /posts/{post} | PostController::class, 'destroy' | Delete a specific {post} |

### GET /auth/facebook

**Handler:** SocialAuthController::class, 'redirectToFacebook'

**Description:** List facebook

---

### GET /auth/facebook/callback

**Handler:** SocialAuthController::class, 'handleFacebookCallback'

**Description:** List callback

---

### GET /auth/google

**Handler:** function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();
    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()

**Description:** List google

---

### GET /

**Handler:** function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', [DashboardController::class, 'index'

**Description:** List resource

---

### GET /diary

**Handler:** DiaryController::class, 'index'

**Description:** List diary

---

### GET /posts/create/{category?}

**Handler:** PostController::class, 'create'

**Description:** Retrieve a specific {category?}

---

### POST /posts

**Handler:** PostController::class, 'store'

**Description:** Create a new posts

---

### GET /community/{category?}

**Handler:** CommunityController::class, 'index'

**Description:** Retrieve a specific {category?}

---

### GET /profile

**Handler:** ProfileController::class, 'edit'

**Description:** List profile

---

### PATCH /profile

**Handler:** ProfileController::class, 'update'

**Description:** Update a specific profile

---

### DELETE /profile

**Handler:** ProfileController::class, 'destroy'

**Description:** Delete a specific profile

---

### POST /profile/photo

**Handler:** ProfileController::class, 'updatePhoto'

**Description:** Create a new photo

---

### DELETE /posts/{post}

**Handler:** PostController::class, 'destroy'

**Description:** Delete a specific {post}

---

