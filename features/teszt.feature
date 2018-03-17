Feature: Teszt

  @javascript
  Scenario: Teszt page request
    Given I am on the homepage
    When I fill in "search" with "Glory Driven Development"
    And I press "searchButton"
    Then I should see "Search results"