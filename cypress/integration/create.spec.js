test('it shows blog posts', () => {
    // factory('App\Post')->create(['title' => 'My First Post']);
    cy.create('App\\Post', { title: 'My First Post' });
  
    cy.visit('/posts').contains('My First Post');
  });