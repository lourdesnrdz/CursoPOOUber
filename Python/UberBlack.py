from car import Car

class UberBlack(Car):
    tpeCarAccepted = []
    seatsMaterial = []

    def _init(license, driver, typeCarAccepted, seatsMaterial):
        super.__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial

        