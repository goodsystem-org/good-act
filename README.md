# good-system/good-act 

A package intended for community members to log their random kindness, big or small.

This is extracted from a community building application (prototype in progress) that would allow members to use logged "good acts" for promotion opportunities as small incentivies.

Potentially can be used by other systems to use such acts as small awards/incentives.

## What's included
 
- A pair of models `Act` and `Review`, with a one to many polymorphic relationship.
- Migrations for such data. 

## How to Use

### Install

`composer require good-system/good-act` 
`php artisan migrate`

### Models available to use 

`\GoodSystem\GoodAct\Act`

`\GoodSystem\GoodAct\Review`

One `Act` can have many `Reviews`.
