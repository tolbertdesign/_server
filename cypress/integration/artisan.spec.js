// php artisan post:make --title="My First Post"

test('it can create posts through the command line', () => {
  cy.artisan('post:make', {
    '--title': 'My First Post',
  })

  cy.visit('/posts').contains('My First Post')
})
