# JohnoTheCoder\NotificationService

---

This isn't a full reference of documentation, just a quick description of the responsibilities of the classes you can see in this directory.

`Notification` is an abstract class and a derivative should be created for each of the notification types you create

`NotificationMethod` is an abstract class and a derivative should be created for each of the methods you use to send notifications, for example Email, SMS, Push Notifications

`NotificationMethodFactory` is responsible for returning an appropriate NotificationMethod object

`NotificationMethodProvider` is an interface to which all `NotificationMethodProviders` must conform to ensure compatability with the rest of the functionality

`NotificationProviderFactory` is responsible for producing the appropriate `NotificationMethodProvider` object to send your notification with

`Recipient` is an interface which must be applied to the objects you intend on parsing through as your recipients, this ensures that the details required are available to the `NotificationMethodProviders`

---

To create a new method of notification extend the `NotificationMethod` class.

To create a new notification extend the `Notification` class. It is also advisable to create your own wrapper extension of this class for your own usage.

To create a new provider create a class which `implements` the `NotificationMethodProvider` interface.

I would also suggest it would be a good idea to create your own `extension` of the `NotificationMethodFactory` class to ensure the appropriate creation. The factory will work 