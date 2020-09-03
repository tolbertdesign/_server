test('authenticated users can see the dashboard', () => {
    cy.login({ name: 'John Doe' });
  
    cy.visit('/dashboard').contains('Welcome Back, John Doe!');
  });