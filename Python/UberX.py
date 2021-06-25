from car import Car

class UberX(Car):
    def _init(license, driver, brand, model):
        super.__init__(license, driver)
        self.brand = brand
        self.model = model

        