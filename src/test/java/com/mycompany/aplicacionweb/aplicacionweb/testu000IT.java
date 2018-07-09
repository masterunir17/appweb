/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.aplicacionweb.aplicacionweb;

import org.junit.Test;
import static org.junit.Assert.*;


import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;

/**
 *
 * @author sfloresr
 */
public class testu000IT {
        
  private WebDriver driver;
  private String baseUrl;
  private boolean acceptNextAlert = true;
  private StringBuffer verificationErrors = new StringBuffer(); 
  
    public testu000IT() {
    }

    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    System.out.println("launching chrome browser");
    System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
    driver = new ChromeDriver();
    baseUrl = "https://www.katalon.com/";
    driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
    }
    
    @After
    public void tearDown() {
    driver.quit();
    String verificationErrorString = verificationErrors.toString();
    if (!"".equals(verificationErrorString)) {
      fail(verificationErrorString);
    }
    }    
    
    
    @Test
    public void testSomeMethod() {
    // TODO review the generated test code and remove the default call to fail.
    driver.get("http://192.168.100.100/");
    driver.findElement(By.linkText("Conoce mas")).click();
    driver.findElement(By.linkText("ENTRAR")).click();
    driver.findElement(By.xpath("//section[@id='features17-r']/div/div/div[3]/div/div[2]/h4")).click();
    driver.findElement(By.linkText("Volver")).click();
    driver.findElement(By.xpath("(//a[contains(text(),'ENTRAR')])[3]")).click();
    driver.findElement(By.xpath("//section[@id='features17-k']/div/div/div[3]/div/div[2]/h4")).click();
    driver.findElement(By.xpath("//table[@id='DataTables_Table_0']/tbody/tr/td")).click();
    driver.findElement(By.linkText("Volver")).click();
    driver.findElement(By.linkText("ENTRAR")).click();
    driver.findElement(By.xpath("//section[@id='features17-r']/div/div/div[2]/div/div[2]/h4")).click();
    driver.findElement(By.xpath("//section[@id='features17-r']/div/div/div[2]/div/div[2]/p")).click();
    driver.findElement(By.linkText("Volver")).click();
    driver.findElement(By.linkText("HOME")).click();
    }
  private boolean isElementPresent(By by) {
    try {
      driver.findElement(by);
      return true;
    } catch (NoSuchElementException e) {
      return false;
    }
  }

  private boolean isAlertPresent() {
    try {
      driver.switchTo().alert();
      return true;
    } catch (NoAlertPresentException e) {
      return false;
    }
  }

  private String closeAlertAndGetItsText() {
    try {
      Alert alert = driver.switchTo().alert();
      String alertText = alert.getText();
      if (acceptNextAlert) {
        alert.accept();
      } else {
        alert.dismiss();
      }
      return alertText;
    } finally {
      acceptNextAlert = true;
    }
  }    
}
