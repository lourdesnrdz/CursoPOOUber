from car import Car

class UberPool(Car):
    def _init(license, driver, brand, model):
        super.__init__(license, driver)
        self.brand = brand
        self.model = model

        