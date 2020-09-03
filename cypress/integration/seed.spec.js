// php artisan db:seed --class=PlansTableSeeder --env=acceptance

test('it seeds the db', () => {
  cy.seed('PlansTableSeeder')
})
