class Car {
    constructor(license, drive) {
        this.id;
        this.license = license;
        this.driver = drive;
        this.passenger;
    }
    
    printDataCar() {
        console.log(this.license)
        console.log(this.driver.name)
        console.log(this.driver.document)
    }
}