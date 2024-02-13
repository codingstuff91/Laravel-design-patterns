## About this project

This project was made to learn and practice the main OOP design patterns within a Laravel framework architecture

## Design patterns covered

### Strategy
Define a family of algorithms, encapsulate each one, and make them interchangeable. Strategy lets the algorithm vary independently from clients that use it.

### Builder
Separate the construction of a complex object from its representation so that the same construction process can create different representations.

### Manager
A little variation of the design pattern Builder that uses Manager classes and Drivers to handle different creation processes.

### Decorator
Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing for extending functionality.

### Factory
Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.

### Template_method
Define the skeleton of an algorithm in an operation, deferring some steps to subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure.

## How to test the design patterns

> [!IMPORTANT]
> Each design pattern can be tested with its own command available into the file `routes/console.php`.

These design patterns are explained with a basic example of the implementation of the solution provided by the design pattern. 

To test these examples you have to execute a artisan php command which is named accordingly to the design pattern name.

> [!NOTE]
> For example for the `Builder` pattern you can execute the following command
`php artisan builder`

### Resources and links

- **[Refactoring guru](https://refactoring.guru/)**
- **[Manager design pattern](https://www.honeybadger.io/blog/laravel-manager-pattern/)**
