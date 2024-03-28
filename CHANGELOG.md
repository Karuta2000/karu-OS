# Release Notes

## [Unreleased](https://github.com/laravel/laravel/compare/v0.6.1...main)

## [v0.6.1](https://github.com/laravel/laravel/compare/v0.6...v0.6.1) - 2024-03-28

**Fixed app breaking error**

- removed spatie/laravel-backup from app

## [v0.6](https://github.com/laravel/laravel/compare/v0.5...v0.6) - 2024-03-28

### Karu OS Version 0.6 Release Notes

Release Date: March 28, 2024

### Task Management Overhaul:

**Introduction of Task Boards:**

- Task lists have been replaced with customizable task boards, offering users greater flexibility and organization in managing tasks. These boards are independent of projects and can be tailored to suit individual needs.
- Each task board can be personalized with a distinct color and title, enhancing visual organization and clarity.
- Additional Task Attributes: Tasks now include due dates, priorities, and statuses.
- Expanded Status Options: Tasks can now be classified into four statuses: not started, in progress, completed, and cancelled, providing users with more comprehensive tracking capabilities.

**Gallery Improvements:**

- Dropdown Form Integration:
  
- The gallery interface has been updated to feature a dropdown form instead of modal dialogs, improving accessibility and user interaction.
  
- View Count Display:
  
- Each image now includes the number of views it has received, allowing users to gauge image popularity and engagement.
  

Design Improvements:**

- The settings page has been refined and enhanced for improved usability and aesthetics.
- General Updates:

**Overall Design Adjustments:**

- Various design adjustments have been made throughout the platform to enhance user experience and visual coherence.

## [v0.5](https://github.com/laravel/laravel/compare/v0.4...v0.5) - 2024-03-23

### Karu OS Version 0.5 Release Notes

Release Date: March 26, 2024

### Changes and Enhancements:

**Further Simplification of Sidebar:**

- The sidebar has been made even smaller and simpler, now displaying only icons without accompanying text. This enhances the visual clarity and efficiency of navigation.

**Gallery Focus:**

- Modal Integration for Images: Users can now interact with images through modal dialogs, enabling actions such as viewing, deleting, or setting images as avatars directly from the gallery.
- Additional Image Information: Time of image addition and associated projects are now displayed, providing users with more context and organization.
- Sorting Options: Users can now sort images by newest or oldest, facilitating easier navigation and management.
- Toaster Notifications: Toasters have been implemented to display notifications, enhancing user feedback and interaction within the gallery.

**Task Updates:**

- Modal Task Updates: Tasks can now be updated via modal dialogs, improving task management efficiency and user experience.
  **Introduction of Colors:**
  
- Color Features: Users can now add and display colors within the system. While the functionality is currently limited, more features related to colors are planned for future updates.
  

**Welcome Page Changelog:**

- The welcome page now includes a changelog, providing users with immediate access to information about recent updates and changes to the platform.
- These updates represent a focused effort to enhance the gallery functionality, streamline task management, and introduce new features such as colors, all aimed at improving the overall user experience of Karu OS.

## [v0.4](https://github.com/laravel/laravel/compare/v0.3...v0.4) - 2024-03-23

### Karu OS Version 0.4 Release Notes

Release Date: March 23, 2024

Improved Sidebar:

- The sidebar has undergone enhancements, providing a more polished and efficient navigation experience.

Modal Integration for Adding Items:

- Users can now add habits, tasks, images, and projects via modal dialogs, streamlining the process and enhancing user interaction.

File Structure Optimization:

- The file structure has been optimized, resulting in improved organization and efficiency. Redundant or outdated files have been removed, ensuring a cleaner system.

Revamped Settings:

- Expanded Settings Sections: Settings have been revamped and divided into five distinct parts, enhancing user control and customization.
  
- Additional User Details: Users can now input additional details such as birthday, sex, and bio, enriching their profile information.
  
- Profile Integration: New user details are seamlessly integrated into user profiles, providing a more comprehensive user experience.
  

Design Adjustments:

- Further adjustments have been made to the design, refining the visual aesthetics and usability of the platform.

Welcome Page Update:

- The welcome page has been updated, offering a refreshed introduction to the platform and its features.

## [v0.3](https://github.com/laravel/laravel/compare/v0.2...v0.3) - 2024-03-10

### Karu OS Version 0.3 Release Notes

Release Date: March 22, 2024

### Changes and Additions:

User Interface Revamp:

- Navbar Removal: The navbar has been replaced with a sidebar, offering a more intuitive navigation experience.

Introduction of Projects:

- Project Management: Users can now create and manage projects within Karu OS.
- Integration with Other Features: Projects can be connected with images, tasks, and habits, fostering better organization and collaboration.

Page Updates:

- Dashboard: The dashboard has been streamlined to exclusively display a list of projects, setting the stage for improved project management.
- Habits Page: Enhancements have been made to the habits page, ensuring smoother interaction and tracking of habits.
- Tasks Page: Tasks are now organized into task lists for each project, facilitating more efficient task management within the context of specific projects.

## [v0.2](https://github.com/laravel/laravel/compare/v0.1...v0.2) - 2024-03-10

### Karu OS Version 0.2 Release Notes

Release Date: March 10, 2024

### Features Added:

- Gallery: Now you can i your images. But only by url for now.
- Tasks: You can also add tasks, through they can only be completed
- Design improvements: Design was little bit improved but only some details
- Profile page: user now has his own profile page, but in future it would contain some useful info

## [v0.1](https://github.com/laravel/laravel/compare/v10.3.2...v0.1) - 2024-03-07

### Karu OS Version 0.1 Release Notes

Release Date: March 9, 2024

### Features Added:

- User: Introducing users. You can also have avatar.
- Habits Tracker: Very simple habits with only functions to create, delete and complete them. You can also have many colors.
- Dashboard: There is not much, only habits you already did

## [v10.3.2](https://github.com/laravel/laravel/compare/v10.3.1...v10.3.2) - 2024-01-04

* [10.x] Reverts `assertOk` change by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/laravel/pull/6303
* Update Axios to latest version by [@u01jmg3](https://github.com/u01jmg3) in https://github.com/laravel/laravel/pull/6306
* [10.x] Update Axios to latest version by [@u01jmg3](https://github.com/u01jmg3) in https://github.com/laravel/laravel/pull/6313

## [v10.3.1](https://github.com/laravel/laravel/compare/v10.3.0...v10.3.1) - 2023-12-23

* [10.x] Add roundrobin transport driver config by [@me-shaon](https://github.com/me-shaon) in https://github.com/laravel/laravel/pull/6301

## [v10.3.0](https://github.com/laravel/laravel/compare/v10.2.10...v10.3.0) - 2023-12-19

* [10.x] Use `assertOk()` instead of `assertStatus(200)` in tests by [@TENIOS](https://github.com/TENIOS) in https://github.com/laravel/laravel/pull/6287
* [10.x] Vite 5 by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/laravel/pull/6292

## [v10.2.10](https://github.com/laravel/laravel/compare/v10.2.9...v10.2.10) - 2023-11-30

* [10.x] Fixes missing property description by [@nunomaduro](https://github.com/nunomaduro) in https://github.com/laravel/laravel/pull/6275
* [10.x] Add partitioned cookie config key by [@fabricecw](https://github.com/fabricecw) in https://github.com/laravel/laravel/pull/6257

## [v10.2.9](https://github.com/laravel/laravel/compare/v10.2.8...v10.2.9) - 2023-11-13

- Update axios to latest version by [@emargareten](https://github.com/emargareten) in https://github.com/laravel/laravel/pull/6272

## [v10.2.8](https://github.com/laravel/laravel/compare/v10.2.7...v10.2.8) - 2023-11-02

- Revert "[10.x] Let database handle default collation" by [@taylorotwell](https://github.com/taylorotwell) in https://github.com/laravel/laravel/pull/6266

## [v10.2.7](https://github.com/laravel/laravel/compare/v10.2.6...v10.2.7) - 2023-10-31

- Postmark mailer configuration update by [@ninjaparade](https://github.com/ninjaparade) in https://github.com/laravel/laravel/pull/6228
- [10.x] Update sanctum config file by [@ahmed-aliraqi](https://github.com/ahmed-aliraqi) in https://github.com/laravel/laravel/pull/6234
- [10.x] Let database handle default collation by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/laravel/pull/6241
- [10.x] Increase bcrypt rounds to 12 by [@valorin](https://github.com/valorin) in https://github.com/laravel/laravel/pull/6245
- [10.x] Use 12 bcrypt rounds for password in UserFactory by [@Jubeki](https://github.com/Jubeki) in https://github.com/laravel/laravel/pull/6247
- [10.x] Fix typo in the comment for token prefix (sanctum config) by [@yuters](https://github.com/yuters) in https://github.com/laravel/laravel/pull/6248
- [10.x] Update fixture hash to match testing cost by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/laravel/pull/6259
- [10.x] Update minimum `laravel/sanctum` by [@crynobone](https://github.com/crynobone) in https://github.com/laravel/laravel/pull/6261
- [10.x] Hash improvements by [@timacdonald](https://github.com/timacdonald) in https://github.com/laravel/laravel/pull/6258
- Redis maintenance store config example contains an excess space by [@hedge-freek](https://github.com/hedge-freek) in https://github.com/laravel/laravel/pull/6264

## [v10.2.6](https://github.com/laravel/laravel/compare/v10.2.5...v10.2.6) - 2023-08-10

- Bump `laravel-vite-plugin` to latest version by [@adevade](https://github.com/adevade) in https://github.com/laravel/laravel/pull/6224

## [v10.2.5](https://github.com/laravel/laravel/compare/v10.2.4...v10.2.5) - 2023-06-30

- Allow accessing APP_NAME in Vite scope by [@domnantas](https://github.com/domnantas) in https://github.com/laravel/laravel/pull/6204
- Omit default values for suffix in phpunit.xml by [@spawnia](https://github.com/spawnia) in https://github.com/laravel/laravel/pull/6210

## [v10.2.4](https://github.com/laravel/laravel/compare/v10.2.3...v10.2.4) - 2023-06-07

- Add `precognitive` key to $middlewareAliases by @emargareten in https://github.com/laravel/laravel/pull/6193

## [v10.2.3](https://github.com/laravel/laravel/compare/v10.2.2...v10.2.3) - 2023-06-01

- Update description by @taylorotwell in https://github.com/laravel/laravel/commit/85203d687ebba72b2805b89bba7d18dfae8f95c8

## [v10.2.2](https://github.com/laravel/laravel/compare/v10.2.1...v10.2.2) - 2023-05-23

- Add lock path by @taylorotwell in https://github.com/laravel/laravel/commit/a6bfbc7f90e33fd6cae3cb23f106c9689858c3b5

## [v10.2.1](https://github.com/laravel/laravel/compare/v10.2.0...v10.2.1) - 2023-05-12

- Add hashed cast to user password by @emargareten in https://github.com/laravel/laravel/pull/6171
- Bring back pusher cluster config option by @jesseleite in https://github.com/laravel/laravel/pull/6174

## [v10.2.0](https://github.com/laravel/laravel/compare/v10.1.1...v10.2.0) - 2023-05-05

- Update welcome.blade.php by @aymanatmeh in https://github.com/laravel/laravel/pull/6163
- Sets package.json type to module by @timacdonald in https://github.com/laravel/laravel/pull/6090
- Add url support for mail config by @chu121su12 in https://github.com/laravel/laravel/pull/6170

## [v10.1.1](https://github.com/laravel/laravel/compare/v10.0.7...v10.1.1) - 2023-04-18

- Fix laravel/framework constraints for Default Service Providers by @Jubeki in https://github.com/laravel/laravel/pull/6160

## [v10.0.7](https://github.com/laravel/laravel/compare/v10.1.0...v10.0.7) - 2023-04-14

- Adds `phpunit/phpunit@10.1` support by @nunomaduro in https://github.com/laravel/laravel/pull/6155

## [v10.1.0](https://github.com/laravel/laravel/compare/v10.0.6...v10.1.0) - 2023-04-15

- Minor skeleton slimming by @taylorotwell in https://github.com/laravel/laravel/pull/6159

## [v10.0.6](https://github.com/laravel/laravel/compare/v10.0.5...v10.0.6) - 2023-04-05

- Add job batching options to Queue configuration file by @AnOlsen in https://github.com/laravel/laravel/pull/6149

## [v10.0.5](https://github.com/laravel/laravel/compare/v10.0.4...v10.0.5) - 2023-03-08

- Add replace_placeholders to log channels by @alanpoulain in https://github.com/laravel/laravel/pull/6139

## [v10.0.4](https://github.com/laravel/laravel/compare/v10.0.3...v10.0.4) - 2023-02-27

- Fix typo by @izzudin96 in https://github.com/laravel/laravel/pull/6128
- Specify facility in the syslog driver config by @nicolus in https://github.com/laravel/laravel/pull/6130

## [v10.0.3](https://github.com/laravel/laravel/compare/v10.0.2...v10.0.3) - 2023-02-21

- Remove redundant `@return` docblock in UserFactory by @datlechin in https://github.com/laravel/laravel/pull/6119
- Reverts change in asset helper by @timacdonald in https://github.com/laravel/laravel/pull/6122

## [v10.0.2](https://github.com/laravel/laravel/compare/v10.0.1...v10.0.2) - 2023-02-16

- Remove unneeded call by @taylorotwell in https://github.com/laravel/laravel/commit/3986d4c54041fd27af36f96cf11bd79ce7b1ee4e

## [v10.0.1](https://github.com/laravel/laravel/compare/v10.0.0...v10.0.1) - 2023-02-15

- Add PHPUnit result cache to gitignore by @itxshakil in https://github.com/laravel/laravel/pull/6105
- Allow php-http/discovery as a composer plugin by @nicolas-grekas in https://github.com/laravel/laravel/pull/6106

## [v10.0.0 (2022-02-14)](https://github.com/laravel/laravel/compare/v9.5.2...v10.0.0)

Laravel 10 includes a variety of changes to the application skeleton. Please consult the diff to see what's new.
