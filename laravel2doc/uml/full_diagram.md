classDiagram
  class Post {
    +user_id
    +content
    +category
  }
  class User {
    +name
    +email
    +password
    +menstruation_day
    +profile_photo_path
  }
  class AuthenticatedSessionController {
    <<Controller>>
    +create()
    +store(LoginRequest $request)
    +destroy(Request $request)
  }
  class ConfirmablePasswordController {
    <<Controller>>
    +show()
    +store(Request $request)
  }
  class EmailVerificationNotificationController {
    <<Controller>>
    +store(Request $request)
  }
  class EmailVerificationPromptController {
    <<Controller>>
    +__invoke(Request $request)
  }
  class NewPasswordController {
    <<Controller>>
    +create(Request $request)
    +store(Request $request)
  }
  class PasswordController {
    <<Controller>>
    +update(Request $request)
  }
  class PasswordResetLinkController {
    <<Controller>>
    +create()
    +store(Request $request)
  }
  class RegisteredUserController {
    <<Controller>>
    +create()
    +store(Request $request)
  }
  class SocialAuthController {
    <<Controller>>
    +redirectToFacebook()
    +handleFacebookCallback()
  }
  class VerifyEmailController {
    <<Controller>>
    +__invoke(EmailVerificationRequest $request)
  }
  class CommunityController {
    <<Controller>>
    +index($category = 'duvidas')
    +edit(Request $request)
    +update(ProfileUpdateRequest $request)
    +destroy(Request $request)
  }
  class Controller {
    <<Controller>>
  }
  class DashboardController {
    <<Controller>>
    +index()
  }
  class DiaryController {
    <<Controller>>
    +index()
  }
  class PostController {
    <<Controller>>
    +create($category = null)
    +store(Request $request)
    +destroy(Post $post)
  }
  class ProfileController {
    <<Controller>>
    +edit(Request $request)
    +update(ProfileUpdateRequest $request)
    +updatePhoto(Request $request)
    +destroy(Request $request)
  }
  Post <-- User : user
