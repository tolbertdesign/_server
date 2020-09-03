// Equivalent to auth()->logout().

test('once a user logs out they cannot see the dashboard', () => {
  cy.login({name: 'John Doe'})

  cy.visit('/dashboard').contains('Welcome Back, John Doe!')

  cy.logout()

  cy.visit('/dashboard').assertRedirect('/login')
})
